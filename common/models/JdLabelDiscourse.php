<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jd_label_discourse".
 *
 * @property int $id
 * @property int $label_id
 * @property int $discourse_id
 * @property string|null $created
 * @property string|null $modified
 * @property string|null $is_valid
 */
class JdLabelDiscourse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jd_label_discourse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'label_id', 'discourse_id'], 'required'],
            [['id', 'label_id', 'discourse_id'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['is_valid'], 'string', 'max' => 5],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'label_id' => 'Label ID',
            'discourse_id' => 'Discourse ID',
            'created' => 'Created',
            'modified' => 'Modified',
            'is_valid' => 'Is Valid',
        ];
    }
}
