<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-29 00:26:36
 * @Last Modified by:   Wang Chunsheng 2192138785@qq.com
 * @Last Modified time: 2020-03-29 00:29:57
 */

use common\helpers\ImageHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\DdWebsiteSlideSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '@SWG\Post(path="/v1';
$this->params['breadcrumbs'][] = $this->title;
?>
<ul class="nav nav-tabs">
    <li>
        <?= Html::a('添加幻灯片', ['create'], ['class' => '']) ?>
    </li>
    <li class="active">
        <?= Html::a('幻灯片管理', ['index'], ['class' => 'btn btn-primary']) ?>
    </li>
</ul>
<div class="firetech-main" style="margin-top:20px;">

    <div class="dd-website-slide-index ">
        <?php // echo $this->render('_search', ['model' => $searchModel]); 
        ?>
        <div class="panel panel-default">
            <div class="box-body">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        // 'id',
                        'images' => [
                            'attribute' => 'images',
                            'format' => ['raw'],
                            'value' => function ($model) {
                                return Html::img(ImageHelper::tomedia($model->images), ['height' => 50, 'width' => 'auto']);
                            }
                        ],
                        'title',
                        'description',
                        'menuname',
                        //'menuurl',
                        //'createtime',
                        //'updatetime',

                        ['class' => 'common\components\ActionColumn'],
                    ],
                ]); ?>


            </div>
        </div>
    </div>
</div>