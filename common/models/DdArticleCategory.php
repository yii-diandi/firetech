<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dd_article_category".
 *
 * @property int $id
 * @property string $title
 * @property int $displayorder
 * @property string $type
 */
class DdArticleCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dd_article_category';
    }

    public function getArticle()
    {
        return $this->hasMany(DdArticle::className(), ['ccate'=>'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'displayorder', 'type'], 'required'],
            [['displayorder','pcate'], 'integer'],
            [['title'], 'string', 'max' => 30],
            [['type'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '分类名称',
            'displayorder' => '排序',
            'type' => '类型',
            'pcate'=>'父级id'
        ];
    }
}
