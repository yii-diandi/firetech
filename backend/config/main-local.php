<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-05 08:17:26
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-01-20 21:57:50
 */
$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'jbo27MLnJW2BfXPpcIYEbEfNjFjPqcyL',
        ],
    ],
];

if (YII_ENV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'controllerNamespace' => 'backend\controllers\gii',
        'viewPath'=>'@backend/views/gii',
        /*自定义*/
        'allowedIPs' => ['127.0.0.1', '::1'],
        'generators' => [
            'crud' => [ //生成器名称
                'class' => 'addonstpl\crud\Generator',
                'templates' => [ //设置我们自己的模板
                    //模板名 => 模板路径
                    'myCrud' => '@frontend/web/backend/giitpl/crud/default'
                ],
            ],
            'module' => [
                'class' => 'addonstpl\module\Generator',
                'templates' => [
                    'addons' => '@frontend/web/backend/giitpl/module/default',
                ],
            ],
            'addons' => [
                'class' => 'addonstpl\addons\Generator',
                'templates' => [
                    'default' => '@frontend/web/backend/giitpl/addons/default',
                ],
            ],
            'model' => [
                'class' => 'addonstpl\model\Generator',
                'templates' => [
                    'default' => '@frontend/web/backend/giitpl/addons/default',
                    'mymodel' => '@frontend/web/backend/giitpl/model/default'
                ],
            ],

        ],
    ];
}

return $config;
