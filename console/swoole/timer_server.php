<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2021-01-18 21:22:36
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-01-18 21:22:38
 */
 
use \diandi\swoole\server\Server;
//站点根目录,相当于nginx的root配置

defined('WEBROOT') or define('WEBROOT', __DIR__.'/console/web');
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

defined('COROUTINE_ENV') or define('COROUTINE_ENV', true);

require(__DIR__ . '/vendor/autoload.php');
$config = [
    'class' => 'diandi\swoole\server\Timer',
    //'timeout'=>2,
    'setting' => [
        'daemonize' => 0,
        'max_coro_num' => 3000,
        'reactor_num' => 1,
        'worker_num' => 1,
        'task_worker_num' => 2,
        'pid_file' => __DIR__ . '/console/testTimer.pid',
        'log_file' => __DIR__ . '/console/runtime/logs/timer_swoole.log',
        'debug_mode' => 0,
        'enable_coroutine' => COROUTINE_ENV
    ],
];

Server::run($config, function (Server $server) {
    $starter = new \diandi\swoole\bootstrap\WebApp($server);
    //初始化函数独立,为了在启动时,不会加载Yii相关的文件,在库更新时采用reload平滑启动服务器
    $starter->init = function (\diandi\swoole\bootstrap\BaseBootstrap $bootstrap) {
        //需要使用Yii-Swoole项目的Yii文件,
        require(__DIR__ . '/vendor/yii-diandi/yii2-swoole/src/Yii.php');
        
        //原项目的配置文件引入
        $config = yii\helpers\ArrayHelper::merge(
            require __DIR__.'/console/swoole/config/main.php',
            require __DIR__.'/console/swoole/config/main-local.php'
        );

        Yii::setAlias('@webroot', WEBROOT);
        Yii::setAlias('@web','/');
         //如果需要原生的swoole Server，可以这样
         Yii::$swooleServer = $bootstrap->getServer()->getSwoole();        
        $bootstrap->appConfig = $config;
    };

    //如果需要swoole Server
    $server->getSwoole()->on("Task", function (swoole_server $serv, $task_id, $from_id, $data) {
            echo "Tasker进程接收到数据";
            echo "#{$serv->worker_id}\tonTask: [PID={$serv->worker_pid}]: task_id=$task_id, data_len=" . strlen($data) . "." . PHP_EOL;
            $serv->finish($data);
        }
    );
    $server->getSwoole()->on("Finish", function (swoole_server $serv, $task_id, $data) {
        echo "Task#$task_id finished, data_len=" . strlen($data) . PHP_EOL;
    });
    $server->bootstrap = $starter;
    $server->start();
});