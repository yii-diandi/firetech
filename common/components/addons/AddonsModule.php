<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-26 09:30:21
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-07-08 21:29:28
 */

namespace common\components\addons;

use Yii;
use common\helpers\ArrayHelper;
use common\models\DdModules;
use diandi\addons\modules\searchs\DdAddons;
use diandi\admin\components\MenuHelper;
use \yii\base\Module;
use yii\web\HttpException;

class AddonsModule extends Module
{
   

    public function init()
    {
        global $_GPC;
         
        $module = $this->id;
        $config = [];
        Yii::$app->params['bloc_id'] = Yii::$app->service->commonGlobalsService->getBloc_id();
        Yii::$app->params['store_id'] = Yii::$app->service->commonGlobalsService->getStore_id();
      
        
        $store_id = Yii::$app->params['store_id'];
         
        if(empty($store_id) && Yii::$app->id !='app-frontend' && Yii::$app->id !='app-console' && Yii::$app->request->getPathInfo() != 'wechat/basics/notify'){
            throw new HttpException(400,'请选择商户后操作');
        }
        
        /* 加载语言包 */
        if (!isset(Yii::$app->i18n->translations[$module])) {
            Yii::$app->i18n->translations[$module] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en',
                'basePath' => '@common/addons/diandi_dingzuo/messagess',
            ];
        }

        $appId = Yii::$app->id;
        switch ($appId) {
            case 'app-backend':
                $configFile = 'backend.php';
                Yii::$app->params['menu'] = $this->getMenus();
                break;
            case 'app-api':
                $configFile = 'api.php';
                break;
            case 'app-frontend':
                $configFile = 'frontend.php';
                break;
            default:
        }
        // 获取应用程序的组件
        $components = \Yii::$app->getComponents();

        if ($config['components']) {
            // 遍历子模块独立配置的组件部分，并继承应用程序的组件配置
            foreach ($config['components'] as $k => $component) {
                if (isset($component['class']) && isset($components[$k]) == false) {
                    continue;
                }
                $config['components'][$k] = array_merge($components[$k], $component);
            }
        }
        // 将新的配置设置到应用程序
        // 很多都是写 Yii::configure($this, $config)，但是并不适用子模块，必须写 Yii::$app
        \Yii::configure(\Yii::$app, $config);
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
                'targetType' => "iframe-tab",
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
}
