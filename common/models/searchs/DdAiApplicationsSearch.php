<?php

namespace common\models\Searchs;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DdAiApplications;

/**
 * DdAiApplicationsSearch represents the model behind the search form of `common\models\DdAiApplications`.
 */
class DdAiApplicationsSearch extends DdAiApplications
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'APP_ID','API_KEY','SECRET_KEY', 'create_time', 'updatetime'], 'safe'],
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
        $query = DdAiApplications::find();

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
            'create_time' => $this->create_time,
            'updatetime' => $this->updatetime,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'APP_ID', $this->APP_ID]);

        return $dataProvider;
    }
}
