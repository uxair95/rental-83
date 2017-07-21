<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Current;

/**
 * CurrentSearch represents the model behind the search form about `backend\models\Current`.
 */
class CurrentSearch extends Current
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['current_id', 'product_product_id', 'days'], 'integer'],
            [['customer_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Current::find();

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
            'current_id' => $this->current_id,
            'product_product_id' => $this->product_product_id,
            'days' => $this->days,
        ]);

        $query->andFilterWhere(['like', 'customer_name', $this->customer_name]);

        return $dataProvider;
    }
}
