<?php

namespace common\models\searchs;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DdMember;
use yii\data\ArrayDataProvider;

/**
 * DdMemberSearch represents the model behind the search form of `common\models\DdMember`.
 */
class DdMemberSearch extends DdMember
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member_id', 'group_id', 'level', 'store_id', 'bloc_id', 'mobile', 'gender', 'status', 'address_id', 'wxapp_id', 'create_time', 'update_time'], 'integer'],
            [['openid', 'username', 'address', 'nickName', 'avatarUrl', 'country', 'province', 'city', 'verification_token', 'auth_key', 'password_hash', 'password_reset_token', 'realname', 'avatar', 'qq', 'vip', 'birthyear', 'constellation', 'zodiac', 'telephone', 'idcard', 'studentid', 'grade', 'zipcode', 'nationality', 'resideprovince', 'graduateschool', 'company', 'education', 'occupation', 'position', 'revenue', 'affectivestatus', 'lookingfor', 'bloodtype', 'height', 'weight', 'alipay', 'msn', 'email', 'taobao', 'site', 'bio', 'interest'], 'safe'],
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
        $query = DdMember::find();

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
            'member_id' => $this->member_id,
            'group_id' => $this->group_id,
            'level' => $this->level,
            'store_id' => $this->store_id,
            'bloc_id' => $this->bloc_id,
            'mobile' => $this->mobile,
            'gender' => $this->gender,
            'status' => $this->status,
            'address_id' => $this->address_id,
            'wxapp_id' => $this->wxapp_id,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'openid', $this->openid])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'nickName', $this->nickName])
            ->andFilterWhere(['like', 'avatarUrl', $this->avatarUrl])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'verification_token', $this->verification_token])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'realname', $this->realname])
            ->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'qq', $this->qq])
            ->andFilterWhere(['like', 'vip', $this->vip])
            ->andFilterWhere(['like', 'birthyear', $this->birthyear])
            ->andFilterWhere(['like', 'constellation', $this->constellation])
            ->andFilterWhere(['like', 'zodiac', $this->zodiac])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'idcard', $this->idcard])
            ->andFilterWhere(['like', 'studentid', $this->studentid])
            ->andFilterWhere(['like', 'grade', $this->grade])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'resideprovince', $this->resideprovince])
            ->andFilterWhere(['like', 'graduateschool', $this->graduateschool])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'revenue', $this->revenue])
            ->andFilterWhere(['like', 'affectivestatus', $this->affectivestatus])
            ->andFilterWhere(['like', 'lookingfor', $this->lookingfor])
            ->andFilterWhere(['like', 'bloodtype', $this->bloodtype])
            ->andFilterWhere(['like', 'height', $this->height])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'alipay', $this->alipay])
            ->andFilterWhere(['like', 'msn', $this->msn])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'taobao', $this->taobao])
            ->andFilterWhere(['like', 'site', $this->site])
            ->andFilterWhere(['like', 'bio', $this->bio])
            ->andFilterWhere(['like', 'interest', $this->interest]);
    
        return $dataProvider;
    }
}
