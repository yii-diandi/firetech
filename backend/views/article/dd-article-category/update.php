<?php
/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-04-12 18:40:07
 * @Last Modified by:   Wang Chunsheng 2192138785@qq.com
 * @Last Modified time: 2020-04-12 18:40:16
 */
 

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DdArticleCategory */

$this->title = '修改分类: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '文章 Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<ul class="nav nav-tabs">
    
    <li>
        <?= Html::a('分类管理', ['index'], ['class' => '']) ?>
    </li>
    <li  class="active">
        <?= Html::a('添加分类', ['create'], ['class' => 'btn btn-primary']) ?>
    </li>
</ul>
<div class="firetech-main"  style="margin-top:20px;">
    <div class="panel panel-default">
        <div class="box-body">
            <div class="dd-article-category-update">


                <?= $this->render('_form', [
                    'model' => $model,
                    'catedata' => $catedata,

                ]) ?>
            </div>
        </div>
    </div>
</div>
