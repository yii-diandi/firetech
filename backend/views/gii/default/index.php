<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2021-01-20 18:19:29
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-01-20 21:49:41
 */
 
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $generators \yii\gii\Generator[] */
/* @var $content string */

$generators = Yii::$app->controller->module->generators;
$this->title = '代码生成器';
?>

<div class="firetech-main" >
        
        <div class="panel panel-info">
              <div class="panel-heading">
                    <h3 class="border-bottom pb-3 mb-3">代码生成器<small class="text-muted">一个神奇的工具，可以为您编写代码</small></h3>
              </div>
              <div class="panel-body">
                    <?php foreach ($generators as $id => $generator): ?>
                        
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <h3><?= Html::encode($generator->getName()) ?></h3>
                            <p class="row-fluid"><?= $generator->getDescription() ?></p>
                            <div class="col-xs-4 padding-left-0"><?= Html::a('生成代码', ['default/view', 'id' => $id], ['class' => ['btn', 'btn btn-block btn-danger btn-sm']]) ?></div>
                        </div>
                    <?php endforeach; ?>
                
              </div>
             
        </div>

        <p><a class="btn btn-success" href="https://www.hopesfire.com/">学习快速开发教程</a></p>
                      
</div>
