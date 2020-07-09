<?php
/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-04-12 18:38:20
 * @Last Modified by:   Wang Chunsheng 2192138785@qq.com
 * @Last Modified time: 2020-04-12 18:38:28
 */
 

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DdArticle */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '文章', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<ul class="nav nav-tabs">
    
    <li>
        <?= Html::a('文章管理', ['index'], ['class' => '']) ?>
    </li>
    <li>
        <?= Html::a('添加文章', ['create'], ['class' => '']) ?>
    </li>
    <li  class="active">
        <?= Html::a('文章详情', ['view'], ['class' => '']) ?>
    </li>
</ul>
<div class=" firetech-main">
<div class="dd-article-view">

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
            'ishot',
            'pcate',
            'ccate',
            'template',
            'title',
            'description',
            'content:ntext',
            'thumb',
            'incontent',
            'source',
            'author',
            'displayorder',
            'linkurl',
            'createtime:datetime',
            'edittime:datetime',
            'click',
            'type',
            'credit',
        ],
    ]) ?>

</div>
    </div>
</div>
</div>