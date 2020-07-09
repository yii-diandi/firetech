<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-29 00:26:47
 * @Last Modified by:   Wang Chunsheng 2192138785@qq.com
 * @Last Modified time: 2020-03-29 00:26:54
 */


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DdWebsiteSlide */

$this->title = '添加幻灯片';
$this->params['breadcrumbs'][] = ['label' => '@SWG\Post(path="/v1', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<ul class="nav nav-tabs">
    <li class="active">
        <?= Html::a('添加幻灯片', ['create'], ['class' => 'btn btn-primary']) ?>
    </li>
    <li>
        <?= Html::a('幻灯片管理', ['index'], ['class' => '']) ?>
    </li>
</ul>
<div class="firetech-main" style="margin-top:20px;">
    <div class="panel panel-default">
        <div class="box-body">
            <div class="dd-website-slide-create">

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>
    </div>
</div>