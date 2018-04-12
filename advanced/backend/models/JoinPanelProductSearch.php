<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JoinPanelProduct;

/**
 * JoinPanelProductSearch represents the model behind the search form about `backend\models\JoinPanelProduct`.
 */
class JoinPanelProductSearch extends JoinPanelProduct
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['panel_product_id', 'panel_index', 'product_index'], 'integer'],
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
        $query = JoinPanelProduct::find();

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
            'panel_product_id' => $this->panel_product_id,
            'panel_index' => $this->panel_index,
            'product_index' => $this->product_index,
        ]);

        return $dataProvider;
    }
}
