<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-05-09 22:51:22
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-11-05 12:15:28
 */

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=locai',
            'tablePrefix' => 'dd_',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'attributes' => [
                PDO::ATTR_STRINGIFY_FETCHES => false,
                PDO::ATTR_EMULATE_PREPARES => false,
            ],
            'enableSchemaCache' => true,

            // Duration of schema cache.
            'schemaCacheDuration' => 3600,

            // Name of the cache component used to store schema information
            'schemaCache' => 'cache',
        ],
        // 'mongodb' => [
        //     'class' => '\yii\mongodb\Connection',
        //     'dsn' => 'mongodb://@localhost:27017/mydatabase',
        //     'options' => [
        //         'username' => 'ceshi',
        //         'password' => 'Password',
        //     ],
        // ],
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
