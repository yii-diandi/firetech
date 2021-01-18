<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2021-01-17 22:50:49
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-01-18 10:31:39
 */
 

use \diandi\swoole\server\Server;

defined('WEBROOT') or define('WEBROOT', __DIR__);
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
defined('COROUTINE_ENV') or define('COROUTINE_ENV', true);

require(__DIR__ . '/../../vendor/autoload.php');

$logFile = __DIR__ . '/../runtime/swoole/'.date('Y/m/d/');

Server::mkdirs($logFile);

$config = [
    'class'=>'diandi\swoole\server\WebSocketServer',
    'port'=>9502,
    'serverType'=>'websocket',
    'setting' => [
        'daemonize'=>0,
        'worker_num'=>1,
        'task_worker_num' => 2,
        'pid_file' => $logFile. 'websocket.pid',
        'log_file' => $logFile. 'swoole_websocket.log',
        'debug_mode'=> 1,
        'enable_coroutine' => COROUTINE_ENV
    ],
];

Server::run($config,function (Server $server){
    $starter = new \diandi\swoole\bootstrap\WebSocketApp($server);
    //初始化函数独立,为了在启动时,不会加载Yii相关的文件,在库更新时采用reload平滑启动服务器
    $starter->init = function ($bootstrap) {
        require(__DIR__ . '/../../vendor/yii-diandi/yii2-swoole/src/Yii.php');

        $config = yii\helpers\ArrayHelper::merge(
            require(__DIR__ . '/config/main.php'),
            require(__DIR__ . '/config/main-local.php')
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
            $Res = [
                'msg'=>$data->getMessage(),
                'line'=>$data->getLine(),
                'file'=>$data->getFile(),
                'code'=>$data->getCode(),
                'type'=>'ForbiddenHttpException'
            ];
            return $Res;
        } elseif($data instanceof \Throwable){
            $Res = [
                'msg'=>$data->getMessage(),
                'line'=>$data->getLine(),
                'file'=>$data->getFile(),
                'code'=>$data->getCode(),
                'type'=>'Throwable'
            ];
            return $Res;
        }
        return json_encode($data);
    };
    $server->start();
});