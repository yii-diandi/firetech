<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2021-01-18 16:51:31
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-03-26 10:45:16
 */
 

return [
    'class' => 'yii\db\Connection',
    // 'dsn' => 'mysql:host=localhost;dbname=locai',
    'dsn' => 'mysql:host=localhost;dbname=cunjingban',
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
];
