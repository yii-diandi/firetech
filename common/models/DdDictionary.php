<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dd_dictionary".
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $value
 */
class DdDictionary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dd_dictionary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value'], 'required'],
            [['type'], 'string', 'max' => 30],
            [['name', 'value'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'name' => 'Name',
            'value' => 'Value',
        ];
    }
}
