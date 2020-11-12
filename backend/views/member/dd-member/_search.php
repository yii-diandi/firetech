<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-11-02 18:00:21
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-11-03 15:36:01
 */
 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\searchs\SearchFields */
/* @var $form yii\widgets\ActiveForm */
?>

<el-form :inline="true" :model="SearchFields" class="demo-form-inline">
    <el-form-item label="会员ID">
        <el-input v-model="SearchFields.member_id" placeholder="审批人"></el-input>
    </el-form-item>
    <el-form-item label="openid">
        <el-input v-model="SearchFields.openid" placeholder="openid"></el-input>
    </el-form-item>
    <el-form-item label="状态">
        <el-select v-model="SearchFields.status" placeholder="状态">
        <el-option label="正常" value="0"></el-option>
        <el-option label="拉黑" value="1"></el-option>
        </el-select>
    </el-form-item>
    <el-form-item label="会员组">
        <el-select v-model="SearchFields.group_id" placeholder="会员组">
        <el-option label="组1" value="0"></el-option>
        <el-option label="组2" value="1"></el-option>
        </el-select>
    </el-form-item>
    <el-form-item label="会员等级">
        <el-select v-model="SearchFields.level" placeholder="会员等级">
        <el-option label="等级1" value="0"></el-option>
        <el-option label="等级2" value="1"></el-option>
        </el-select>
    </el-form-item>
    
    <el-form-item>
        <el-button type="primary" @click="onSearch"  size="small">查询</el-button>
    </el-form-item>
</el-form>
        