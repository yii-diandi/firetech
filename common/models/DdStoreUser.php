<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dd_store_user".
 *
 * @property int $store_user_id
 * @property string $user_name
 * @property string $password
 * @property int $wxapp_id
 * @property int $create_time
 * @property int $update_time
 */
class DdStoreUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dd_store_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wxapp_id', 'create_time', 'update_time'], 'integer'],
            [['update_time'], 'required'],
            [['user_name', 'password'], 'string', 'max' => 255],
            [['user_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'store_user_id' => 'Store User ID',
            'user_name' => 'User Name',
            'password' => 'Password',
            'wxapp_id' => 'Wxapp ID',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
