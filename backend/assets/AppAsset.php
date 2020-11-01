<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-06-08 00:25:30
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-06-08 00:26:45
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'resource/css/site.css',
    ];
    public $js = [
        // 'assets/99a51ff8/jquery-ui.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'common\widgets\adminlte\AdminLteAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
