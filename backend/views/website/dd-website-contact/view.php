<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\联系我们 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '联系我们s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<ul class="nav nav-tabs">
    <li>
        <?= Html::a('添加 联系我们', ['create'], ['class' => '']) ?>
    </li>
    <li>
        <?= Html::a('联系我们管理', ['index'], ['class' => '']) ?>
    </li>
    <li  class="active">
        <?= Html::a('联系我们管理', ['view'], ['class' => '']) ?>
    </li>
</ul>
<div class=" firetech-main">
<div class="dd-website-contact-view">

    <div class="panel panel-default">
        <div class="box-body">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'contact',
            'createtime',
            'updatetime',
        ],
    ]) ?>

</div>
    </div>
</div>
</div>