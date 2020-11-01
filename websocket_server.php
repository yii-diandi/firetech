<?php

use \diandi\swoole\server\Server;

defined('WEBROOT') or define('WEBROOT', __DIR__ . '/console/web');
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
defined('COROUTINE_ENV') or define('COROUTINE_ENV', true);

require(__DIR__ . '/vendor/autoload.php');

$config = [
    'class'=>'diandi\swoole\server\WebSocketServer',
    'port'=>9502,
    'serverType'=>'websocket',
    'setting' => [
        'daemonize'=>0,
        'worker_num'=>1,
        'task_worker_num' => 2,
        'pid_file' => __DIR__ . '/console/runtime/websocket.pid',
        'log_file' => __DIR__ . '/console/runtime/logs/swoole_websocket.log',
        'debug_mode'=> 1,
        'enable_coroutine' => COROUTINE_ENV
    ],
];

Server::run($config,function (Server $server){
    $starter = new \diandi\swoole\bootstrap\WebSocketApp($server);
    //初始化函数独立,为了在启动时,不会加载Yii相关的文件,在库更新时采用reload平滑启动服务器
    $starter->init = function ($bootstrap) {
        require(__DIR__ . '/vendor/yii-diandi/yii2-swoole/src/Yii.php');

        $config = yii\helpers\ArrayHelper::merge(
            require(__DIR__ . '/console/swoole/config/main.php'),
            require(__DIR__ . '/console/swoole/config/main-local.php')
        );
        Yii::setAlias('@webroot', WEBROOT);
        Yii::setAlias('@web', '/');
        //如果需要原生的swoole Server，可以这样
        Yii::$swooleServer = $bootstrap->getServer()->getSwoole();
        $bootstrap->appConfig = $config;

    };

    $server->bootstrap = $starter;

    $starter->formatData = function ($data) {
        if($data instanceof \yii\web\ForbiddenHttpException){
            return ['errors' => [['code' => $data->getCode(), 'message' => $data->getMessage()]]];
        } elseif($data instanceof \Throwable){
            return ['errors' => [['code' => $data->getCode(), 'message' => $data->getMessage()]]];
        }
            return json_encode($data);
    };
    
//    $server->getSwoole()->
    $server->start();
});