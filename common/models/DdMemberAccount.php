<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dd_member_account".
 *
 * @property int $id
 * @property int|null $merchant_id 商户id
 * @property int|null $member_id 用户id
 * @property int|null $level 会员等级
 * @property float|null $user_money 当前余额
 * @property float|null $accumulate_money 累计余额
 * @property float|null $give_money 累计赠送余额
 * @property float|null $consume_money 累计消费金额
 * @property float|null $frozen_money 冻结金额
 * @property int|null $user_integral 当前积分
 * @property int|null $accumulate_integral 累计积分
 * @property int|null $give_integral 累计赠送积分
 * @property float|null $consume_integral 累计消费积分
 * @property int|null $frozen_integral 冻结积分
 * @property int|null $status 状态[-1:删除;0:禁用;1启用]
 */
class DdMemberAccount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dd_member_account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['merchant_id', 'member_id', 'level', 'user_integral', 'accumulate_integral', 'give_integral', 'frozen_integral', 'status'], 'integer'],
            [['user_money', 'accumulate_money', 'give_money', 'consume_money', 'frozen_money', 'consume_integral'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => 'Merchant ID',
            'member_id' => 'Member ID',
            'level' => 'Level',
            'user_money' => 'User Money',
            'accumulate_money' => 'Accumulate Money',
            'give_money' => 'Give Money',
            'consume_money' => 'Consume Money',
            'frozen_money' => 'Frozen Money',
            'user_integral' => 'User Integral',
            'accumulate_integral' => 'Accumulate Integral',
            'give_integral' => 'Give Integral',
            'consume_integral' => 'Consume Integral',
            'frozen_integral' => 'Frozen Integral',
            'status' => 'Status',
        ];
    }
}
