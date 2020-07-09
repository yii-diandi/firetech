<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-02-29 16:57:27
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-07-02 12:39:50
 */

return [
    'name' => '店滴',
    'version' => '1.0.1',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@vue' => '@common/widgets/adminlte/yii-vue',
        '@npm' => '@vendor/npm-asset',
        '@TencentYoutuyun' => '@vendor/youtu/TencentYoutuyun',
        '@diandi' => '@vendor/yii-diandi',
    ],
    'vendorPath' => dirname(dirname(__DIR__)).'/vendor',
    'modules' => [
        'settings' => [
            'class' => 'yii2mod\settings\Module',
        ],
    ],
    'bootstrap' => [
        // 初始化模块依赖的扩展
        'diandi\addons\loader',
        'queue'
    ],
    'components' => [
        /* ------ 微信业务组件 ------ **/
        'wechat' => [
            'class' => 'common\components\wechat\Wechat',
            'userOptions' => [],  // 用户身份类参数
            'sessionParam' => 'wechatUser', // 微信用户信息将存储在会话在这个密钥
            'returnUrlParam' => '_wechatReturnUrl', // returnUrl 存储在会话中
            'rebinds' => [ // 自定义服务模块
                // 'cache' => 'common\components\Cache',
            ],
        ],
        /* ------ 队列设置 ------ **/
        'queue' => [
            'class' => 'yii\queue\redis\Queue',
            'redis' => 'redis', // 连接组件或它的配置
            'channel' => 'queue', // Queue channel key
            'as log' => 'yii\queue\LogBehavior', // 日志
        ],
        'settings' => [
            'class' => 'yii2mod\settings\components\Settings',
            'modelClass' => 'common\models\Setting',
        ],
        'helper' => [
            'class' => 'common\components\helpers\helper',
        ],
        'service' => [
            'class' => 'common\services\BaseService',
        ],
        'i18n' => [
            'translations' => [
                'yii2mod.settings' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'yii2-admin' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@diandi/admin/messages',
                ],
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
            ],
        ],
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'tpl' => [
                    'class' => 'yii\smarty\ViewRenderer',
                    'cachePath' => '@runtime/Smarty/cache',
                ],
                'twig' => [
                    'class' => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    // Array of twig options:
                    'options' => [
                        'auto_reload' => true,
                    ],
                    'globals' => ['html' => '\yii\helpers\Html'],
                    'uses' => ['yii\bootstrap'],
                ],
                // ...
            ],
        ],
    ],
];
