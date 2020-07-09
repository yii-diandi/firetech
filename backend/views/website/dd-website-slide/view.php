<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-29 00:27:31
 * @Last Modified by:   Wang Chunsheng 2192138785@qq.com
 * @Last Modified time: 2020-03-29 00:27:32
 */


use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DdWebsiteSlide */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '幻灯片', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<ul class="nav nav-tabs">
    <li>
        <?= Html::a('添加幻灯片', ['create'], ['class' => '']) ?>
    </li>
    <li>
        <?= Html::a('幻灯片管理', ['index'], ['class' => '']) ?>
    </li>
    <li class="active">
        <?= Html::a('幻灯片管理', ['view'], ['class' => '']) ?>
    </li>
</ul>
<div class=" firetech-main">
    <div class="dd-website-slide-view">

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
                        'images',
                        'title',
                        'description',
                        'menuname',
                        'menuurl',
                        'createtime',
                        'updatetime',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>