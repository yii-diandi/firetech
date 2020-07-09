<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-05-14 08:13:17
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-05-14 08:16:37
 */
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\联系我们Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '联系我们s';
$this->params['breadcrumbs'][] = $this->title;
?>
<ul class="nav nav-tabs">
    <li>
        <?= Html::a('添加 联系我们', ['create'], ['class' => '']); ?>
    </li>
    <li  class="active">
        <?= Html::a('联系我们管理', ['index'], ['class' => 'btn btn-primary']); ?>
    </li>
</ul>
<div class="firetech-main"  style="margin-top:20px;">

<div class="dd-website-contact-index ">
    <?php // echo $this->render('_search', ['model' => $searchModel]);?>
    <div class="panel panel-default">
        <div class="box-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'name',
            'contact',
            'createtime:datetime',
            // 'updatetime:datetime',

            ['class' => 'common\components\ActionColumn'],
        ],
    ]); ?>


</div>
    </div>
</div>
</div>