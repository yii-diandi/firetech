<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-06-03 12:29:49
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-11-03 00:55:32
 */

namespace common\widgets\adminlte;

use backend\assets\AppAsset;
use Exception;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class VueJsAsset.
 */
class ExportExcelAsset extends AssetBundle
{
    public $sourcePath = '@vue/';

    public $css = [
        // 'element-ui/lib/theme-chalk/index.css',
    ];

    public $js = [
        'src/Export2Excel.js',
    ];

    public $jsOptions = [
        'charset'=>"utf-8",
        // 'type'=>'module',
        'position'=>View::POS_HEAD
    ];

    public $depends = [
        'common\widgets\adminlte\VueJsAsset'
    ];

    

    /**
     * {@inheritdoc}
     */
    public function init()
    {

        parent::init();
    }

   
}
