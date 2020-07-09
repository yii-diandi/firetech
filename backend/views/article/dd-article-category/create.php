<?php
/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-04-12 18:38:58
 * @Last Modified by:   Wang Chunsheng 2192138785@qq.com
 * @Last Modified time: 2020-04-12 18:41:27
 */
 

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DdArticleCategory */

$this->title = '添加分类';
$this->params['breadcrumbs'][] = ['label' => '文章分类', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
            <div class="dd-article-category-create">

                <?= $this->render('_form', [
                    'model' => $model,
                    'catedata' => $catedata,
                    
                ]) ?>

            </div>
        </div>
    </div>
</div>