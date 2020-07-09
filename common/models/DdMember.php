<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-31 07:58:05
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-05-26 08:35:38
 */

namespace common\models;

/**
 * This is the model class for table "dd_member".
 *
 * @property int    $user_id
 * @property string $open_id
 * @property string $nickName
 * @property string $avatarUrl
 * @property int    $gender
 * @property string $country
 * @property string $province
 * @property string $city
 * @property int    $address_id
 * @property int    $wxapp_id
 * @property int    $create_time
 * @property int    $update_time
 */
class DdMember extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dd_member';
    }

    /**
     * 行为.
     */
    public function behaviors()
    {
        /*自动添加创建和修改时间*/
        return [
            [
                'class' => \common\behaviors\SaveBehavior::className(),
                'updatedAttribute' => 'create_time',
                'createdAttribute' => 'update_time',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gender', 'level', 'address_id', 'wxapp_id', 'create_time', 'update_time'], 'integer'],
            [['open_id', 'nickName', 'avatarUrl'], 'string', 'max' => 255],
            [['country', 'province', 'city'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'member_id' => '用户ID',
            'open_id' => 'OpenID',
            'nickName' => '昵称',
            'avatarUrl' => '头像',
            'gender' => '性别',
            'country' => '国家',
            'province' => '省份',
            'city' => '城市',
            'username' => '用户名',
            'mobile' => '手机号',
            'address_id' => '地址',
            'wxapp_id' => 'Wxapp ID',
            'access_token' => 'Access Token',
            'verification_token' => '验证token',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
        ];
    }
}
