<?php

namespace common\models\Searchs;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DdAiFaces;

/**
 * DdAiFacesSearch represents the model behind the search form of `common\models\DdAiFaces`.
 */
class DdAiFacesSearch extends DdAiFaces
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ai_user_id', 'ai_group_id'], 'integer'],
            [['createtime', 'updatetime'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DdAiFaces::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'ai_user_id' => $this->ai_user_id,
            'ai_group_id' => $this->ai_group_id,
            'createtime' => $this->createtime,
            'updatetime' => $this->updatetime,
        ]);

        return $dataProvider;
    }
}
