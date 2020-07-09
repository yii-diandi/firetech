<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-26 09:16:19
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-07-08 21:29:06
 */

namespace common\components\addons;


use Yii;
use yii\web\AssetBundle;

class AddonsAsset extends AssetBundle
{
    // public $basePath = '@webroot/assetsaddons/diandi_distribution';

    // public $baseUrl = '@web/assetsaddons/diandi_distribution';

    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@common/addons/diandi_pro/assets';

    public $version;

    /**
     * {@inheritdoc}
     */
    public $css = [];
    /**
     * {@inheritdoc}
     */
    public $js = [];

    public $jsOptions = [
        'type' => 'module'
    ];
    
    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'common\widgets\adminlte\VuemainAsset',
    ];

    public $action = '';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        global $_GPC;
        $module = Yii::$app->controller->module->id;
        $controllerPath = Yii::$app->controller->id;
        $actionName  = Yii::$app->controller->action->id;
        $this->sourcePath = sprintf('@common/addons/%s/assets/', trim($module));
        if(is_file(Yii::getAlias($this->sourcePath.$controllerPath.'/'.$actionName.'.js'))){
            $this->js[] = $controllerPath.'/'.$actionName.'.js';             
        }
        if (YII_ENV_DEV) {
            // p($_GPC);
        }
        parent::init();
    }

   
    
}
