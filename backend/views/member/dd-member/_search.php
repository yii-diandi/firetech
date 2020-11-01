<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-05-11 11:53:40
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-10-31 15:56:03
 */
 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\searchs\DdMemberSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info">
      <div class="panel-heading">
            <h3 class="panel-title">搜索</h3>
      </div>
      <div class="panel-body">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
        <div class="dd-member-search">

            <?php $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
            ]); ?>
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <?= $form->field($model, 'member_id') ?>

                    <?= $form->field($model, 'openid') ?>


                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">


                    <?= $form->field($model, 'gender') ?>
                </div>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <?= $form->field($model, 'nickName') ?>
                    
                </div>
                
            </div>
            
            
            




            <?php // echo $form->field($model, 'country') ?>

            <?php // echo $form->field($model, 'province') ?>

            <?php // echo $form->field($model, 'city') ?>

            <?php // echo $form->field($model, 'address_id') ?>

            <?php // echo $form->field($model, 'wxapp_id') ?>

            <?php // echo $form->field($model, 'create_time') ?>

            <?php // echo $form->field($model, 'update_time') ?>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>
                    <?= Html::resetButton('重置', ['class' => 'btn btn-outline-secondary']) ?>
                </div>
            </div>

        

            <?php ActiveForm::end(); ?>

        </div>
      </div>
</div>