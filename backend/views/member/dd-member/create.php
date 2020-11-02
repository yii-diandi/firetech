<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DdMember */

$this->title = '添加 Dd Member';
$this->params['breadcrumbs'][] = ['label' => 'Dd Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_tab') ?>

<div class="firetech-main">
    <div class="panel panel-default">
        <div class="box-body">
            <div class="dd-member-create">

                <?= $this->render('_form', [
                'model' => $model,
                ]) ?>

            </div>
        </div>
    </div>
</div>