<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-05-09 22:51:22
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-01-18 00:38:59
 */

return [
    'components' => [
         /* ------ 缓存 ------ **/
        'cache' => [
            'class' => 'yii\redis\Cache',
        ],
        /* ------ REDIS ------ **/
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 2,
        ],
    ],
    'language' => 'zh-CN',
];
