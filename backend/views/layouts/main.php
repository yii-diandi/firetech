<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-05-08 12:17:00
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-02-27 06:01:59
 */
// use common\widgets\adminlte\VueJsAsset;

use common\components\addons\AddonsAsset;
use common\widgets\adminlte\AdminLteAsset;
use common\widgets\firevue\VuemainAsset;
use yii\helpers\Html;
use yii\web\View;

/* @var $this \yii\web\View */
/* @var $content string */
// VueJsAsset::register($this);
$this->registerJs("window.sysinfo={
    'CSRF_HEADER':'". \yii\web\Request::CSRF_HEADER ."',".
    "csrfToken:'". Yii::$app->request->csrfToken."'};",View::POS_HEAD);

// 加载单页面vue对应的js
AddonsAsset::register($this);


if (Yii::$app->controller->action->id === 'login') {
    /**
     * Do not use this code in your template. Remove it.
     * Instead, use the code  $this->layout = '//main-login'; in your controllers.
     */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {
    if (class_exists('common\widgets\adminlte\ThemeAsset')) {
        common\widgets\adminlte\ThemeAsset::register($this);
    }

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@common/widgets/adminlte/asset'); ?>
   
    <?php $this->beginPage(); ?>
    <!DOCTYPE html v-cloak>
    <html lang="<?= Yii::$app->language; ?>">

    <head>
        <meta charset="<?= Yii::$app->charset; ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <?= Html::csrfMetaTags(); ?>
        <title><?= Html::encode($this->title); ?></title>
        <?php $this->head(); ?>
        <style>
            #tab-content {
                padding: 15px;
                min-height: 100vh;
            }

        </style>
       
    </head>

    <body class="hold-transition sidebar-mini fixed" >

        <?php $this->beginBody(); ?>
        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ); ?>

    

        <?php $this->endBody(); ?>
    </body>

    </html>
    <?php $this->endPage(); ?>
    
<?php
} ?>

