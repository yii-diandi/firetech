<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-14 23:50:50
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-02-25 13:46:00
 */


use richardfan\widget\JSRegister;
use yii\helpers\Html;
use yii\web\View;

$is_addons = Yii::$app->params['is_addons'];
/* @var $this \yii\web\View */
/* @var $content string */
$this->registerJs("window.sysinfo={
    'CSRF_HEADER':'". \yii\web\Request::CSRF_HEADER ."',".
    "csrfToken:'". Yii::$app->request->csrfToken."'};",View::POS_HEAD);

if (Yii::$app->controller->action->id === 'login' || Yii::$app->controller->action->id === 'signup') {
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
  
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
      
    </head>

    <body class="hold-transition <?= empty(Yii::$app->params['Website']['themcolor']) ?'skin-blue':Yii::$app->params['Website']['themcolor'] ?>   sidebar-mini fixed"  >

        <?php $this->beginBody() ?>
        <div class="wrapper" id="fire-main">
        <el-container>
            <el-header>
                    <?= $this->render(
                        'header.php',
                        ['directoryAsset' => $directoryAsset]
                    ) ?>
            </el-header>
            <el-container>
                <el-aside width="200px">
                    <?= $this->render(
                        'left.php',
                        ['directoryAsset' => $directoryAsset]
                    )
                    ?>
                </el-aside>
                <el-container>
                <el-main>
                    <?= $this->render(
                        'content-base.php',
                        ['content' => $content, 'directoryAsset' => $directoryAsset]
                    ) ?>
                </el-main>
                <el-footer>
                
                        <?= $this->render(
                                'footer.php',
                                [
                                    'content' => $content, 
                                    'directoryAsset' => $directoryAsset,
                                    'is_addons'=>$is_addons
                                ]
                            ) ?>

                </el-footer>
                </el-container>
            </el-container>
        </el-container>

           
           
          



           
        </div>



        <?php $this->endBody() ?>
    </body>

    </html>
    <?php $this->endPage() ?>
<?php
} ?>