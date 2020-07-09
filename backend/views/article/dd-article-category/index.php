<?php
/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-04-12 18:39:42
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-05-22 14:06:20
 */
use leandrogehlen\treegrid\TreeGrid;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\DdArticleCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章分类';
$this->params['breadcrumbs'][] = $this->title;
?>
<ul class="nav nav-tabs">
    
    <li  class="active">
        <?= Html::a('分类管理', ['index'], ['class' => 'btn btn-primary']); ?>
    </li>
    <li>
        <?= Html::a('添加分类', ['create'], ['class' => '']); ?>
    </li>
</ul>
<div class="firetech-main"  style="margin-top:20px;">

<div class="dd-article-category-index ">
    <?php // echo $this->render('_search', ['model' => $searchModel]);?>
    <div class="panel panel-default">
        <div class="box-body">
        <?= TreeGrid::widget([
                    'dataProvider' => $dataProvider,
                    'keyColumnName' => 'id',
                    'parentColumnName' => 'pcate',
                    'parentRootValue' => '0', //first parentId value
                    'pluginOptions' => [
                        'initialState' => 'collapsed',
                    ],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'title',
                        'displayorder',
                        'type',

                        ['class' => 'common\components\ActionColumn'],
                    ],
                ]); ?>


</div>
    </div>
</div>
</div>