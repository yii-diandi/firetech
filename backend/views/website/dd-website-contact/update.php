<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\联系我们 */

$this->title = 'Update 联系我们: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '联系我们s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<ul class="nav nav-tabs">
    <li  class="active">
        <?= Html::a('添加 联系我们', ['create'], ['class' => 'btn btn-primary']) ?>
    </li>
    <li>
        <?= Html::a('联系我们管理', ['index'], ['class' => '']) ?>
    </li>
</ul>
<div class="firetech-main"  style="margin-top:20px;">
    <div class="panel panel-default">
        <div class="box-body">
            <div class="dd-website-contact-update">


                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>
