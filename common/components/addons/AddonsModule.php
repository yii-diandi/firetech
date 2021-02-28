<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-26 09:30:21
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-02-20 18:50:00
 */

namespace common\components\addons;

use common\helpers\ArrayHelper;
use common\helpers\FileHelper;
use diandi\addons\models\searchs\DdAddons;
use diandi\admin\components\MenuHelper;
use Yii;
use yii\base\Module;
use yii\web\HttpException;

class AddonsModule extends Module
{
    public function init()
    {
        global $_GPC;


        $logPath = Yii::getAlias('@runtime/base/addons/'.date('ymd').'.log');

        $module = $this->id;
        

        $config = [];
        Yii::$app->params['bloc_id'] = Yii::$app->service->commonGlobalsService->getBloc_id();
        Yii::$app->params['store_id'] = Yii::$app->service->commonGlobalsService->getStore_id();
        FileHelper::writeLog($logPath, '模块api父类',[Yii::$app->params['bloc_id'],Yii::$app->params['store_id']]);

        $store_id = Yii::$app->params['store_id'];

        if (empty($store_id) && Yii::$app->id != 'app-api' && Yii::$app->id != 'app-frontend' && Yii::$app->id != 'app-console' && Yii::$app->request->getPathInfo() != 'wechat/basics/notify') {
            throw new HttpException(400, '请选择商户后操作');
        }

        /* 加载语言包 */
        if (!isset(Yii::$app->i18n->translations[$module])) {
            Yii::$app->i18n->translations[$module] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en',
                'basePath' => '@addons/'.$module.'/messagess',
            ];
        }

        $appId = Yii::$app->id;
        switch ($appId) {
            case 'app-backend':
                $configPath = Yii::getAlias('@addons/'.$module.'/config/backend.php');
                Yii::$app->params['menu'] = $this->getMenus();

                break;
            case 'app-api':
                $configPath = Yii::getAlias('@addons/'.$module.'/config/api.php');
                break;
            case 'app-frontend':
                $configPath = Yii::getAlias('@addons/'.$module.'/config/frontend.php');
                break;
            default:
        }

        if (file_exists($configPath)) {
            $config = require $configPath;
        }

        // 获取应用程序的组件
        $components = \Yii::$app->getComponents();

        if (!empty($config['components'])) {
            // 遍历子模块独立配置的组件部分，并继承应用程序的组件配置
            foreach ($config['components'] as $k => $component) {
                if (isset($component['class']) && isset($components[$k]) == false) {
                    continue;
                }
                $config['components'][$k] = array_merge($components[$k], $component);
            }

            Yii::$app->setComponents($config['components']);
        }

        if(in_array($appId,['app-backend','app-api','app-frontend'])){
            // 初始化公众号配置信息
            $this->initWechat();
        }
    }

    public function getMenus()
    {
        $modules = DdAddons::findOne(['identifie' => $this->id]);
        $callback = function ($menu) {
            $data = json_decode($menu['data'], true);
            $items = $menu['children'];
            $return = [
                'id' => $menu['id'],
                'text' => $menu['name'],
                'icon' => $menu['icon'],
                'order' => $menu['order'],
                'type' => $menu['type'],
                'targetType' => 'iframe-tab',
                'url' => $menu['route'],
            ];
            //处理我们的配置
            if ($data) {
                isset($data['visible']) && $return['visible'] = $data['visible']; //visible
                isset($data['icon']) && $data['icon'] && $return['icon'] = $data['icon']; //icon
                //other attribute e.g. class...
                $return['options'] = $data;
            }

            //没配置图标的显示默认图标
            (!isset($return['icon']) || !$return['icon']) && $return['icon'] = 'fa fa-circle-o';
            $items && $return['children'] = $items;

            return  $return;
        };
        $where = ['is_sys' => 'addons', 'module_name' => $this->id];
        $menus = MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback, $where);

        return ArrayHelper::arraySort($menus, 'order', 'asc');
    }

    public function initWechat()
    {   

        $config = require  Yii::getAlias('@api/modules/officialaccount/config.php');

        $params = Yii::$app->params;
        $conf = $params['conf'];
    
        $Wechatpay = $conf['wechatpay'];
        $wechat = $conf['wechat'];
        
        // 支付参数设置
        $config['params']['wechatPaymentConfig'] = [
            'app_id' => $Wechatpay['app_id'],
            'mch_id' => $Wechatpay['mch_id'],
            'key' => $Wechatpay['key'],  // API 密钥
            // 如需使用敏感接口（如退款、发送红包等）需要配置 API 证书路径(登录商户平台下载 API 证书)
            'cert_path'          => Yii::getAlias('@api/modules/officialaccount/cert/apiclient_cert.pem'), // XXX: 绝对路径！！！！
            'key_path'          => Yii::getAlias('@api/modules/officialaccount/cert/apiclient_key.pem'), // XXX: 绝对路径！！！！
            'notify_url' => Yii::$app->request->hostInfo.'/api/wechat/basics/notify',
        ];

        
        $redirect_uri = !empty($_GPC['redirect_uri'])?$_GPC['redirect_uri']:'';
        
        // 公众号设置
        $wechatConfig = [
            /**
            * 账号基本信息，请从微信公众平台/开放平台获取
            */
            'app_id' => $wechat['app_id'],
            'secret' => $wechat['secret'],
            'token'   => $wechat['token'],          // Token
            'aes_key' => $wechat['aes_key'],
            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => 'array',
            'oauth' => [
                'scopes'   => ['snsapi_userinfo'],
                'callback' =>  $redirect_uri,
            ],
            // 日志配置
            'log' => [
                'default' => 'dev', // 默认使用的 channel，生产环境可以改为下面的 prod
                'channels' => [
                    // 测试环境
                    'dev' => [
                        'driver' => 'single',
                        'path' => Yii::getAlias('@api/runtime/officialaccount/'.date('Ym/d').'.log'),
                        'level' => 'debug',
                    ],
                    // 生产环境
                    'prod' => [
                        'driver' => 'daily',
                        'path' => Yii::getAlias('@api/runtime/officialaccount/'.date('Ym/d').'.log'),
                        'level' => 'info',
                    ],
                ],
            ]
        ];
        
        $config['params']['wechatConfig'] = array_merge($config['params']['wechatConfig'],$wechatConfig);
      
        $params = Yii::$app->params;
        
        foreach ($params as $key => $value) {
           if(isset($config['params'][$key])){
                $config['params'][$key] = $config['params'][$key];
           }else{
                $config['params'][$key] = $value;
           } 
        }
        // 将新的配置设置到应用程序
        // 很多都是写 Yii::configure($this, $config)，但是并不适用子模块，必须写 Yii::$app
        \Yii::configure(\Yii::$app, $config);
    }
}
