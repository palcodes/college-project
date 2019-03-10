<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Teachers;

/**
 * TeachersSearch represents the model behind the search form of `common\models\Teachers`.
 */
class TeachersSearch extends Teachers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t_id'], 'integer'],
            [['t_name', 'dob', 'gender', 'department', 'education', 'subject'], 'safe'],
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
        $query = Teachers::find();

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
            't_id' => $this->t_id,
            'dob' => $this->dob,
        ]);

        $query->andFilterWhere(['like', 't_name', $this->t_name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'subject', $this->subject]);

        return $dataProvider;
    }
}
