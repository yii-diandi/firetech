<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-11-02 02:15:08
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-11-02 04:21:45
 */

use common\components\backend\VueBackendAsset;
use yii\helpers\Html;
use common\widgets\MyGridView;
VueBackendAsset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\DdMemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '会员管理';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_tab') ?>
                
<div class="firetech-main">

    <div class="dd-member-index " id="dd-member-index">
        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
                <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">列表</h3>
            </div>
            <div class="box-body table-responsive">
                                    <?= MyGridView::widget([
                    'dataProvider' => $dataProvider,
                    'layout' => "{items}\n{pager}",
                    'filterModel' => $searchModel,
        'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                                'member_id',
            'group_id',
            'level',
            'openid',
            'store_id',
            //'bloc_id',
            //'username',
            //'mobile',
            //'address',
            //'nickName',
            //'avatarUrl',
            //'gender',
            //'country',
            //'province',
            //'status',
            //'city',
            //'address_id',
            //'wxapp_id',
            //'verification_token',
            //'create_time',
            //'update_time',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'realname',
            //'avatar',
            //'qq',
            //'vip',
            //'birthyear',
            //'constellation',
            //'zodiac',
            //'telephone',
            //'idcard',
            //'studentid',
            //'grade',
            //'zipcode',
            //'nationality',
            //'resideprovince',
            //'graduateschool',
            //'company',
            //'education',
            //'occupation',
            //'position',
            //'revenue',
            //'affectivestatus',
            //'lookingfor',
            //'bloodtype',
            //'height',
            //'weight',
            //'alipay',
            //'msn',
            //'email:email',
            //'taobao',
            //'site',
            //'bio',
            //'interest',
                    
                    ['class' => 'common\components\ActionColumn'],
                    ],
                    ]); ?>
                
                
            </div>
        </div>
    </div>
</div>