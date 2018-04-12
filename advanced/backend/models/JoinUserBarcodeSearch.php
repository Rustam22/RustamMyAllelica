<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JoinUserBarcode;

/**
 * JoinUserBarcodeSearch represents the model behind the search form about `backend\models\JoinUserBarcode`.
 */
class JoinUserBarcodeSearch extends JoinUserBarcode
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_barcode_id', 'user_index'], 'integer'],
            [['barcode_index', 'date'], 'safe'],
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
        $query = JoinUserBarcode::find();

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
            'user_barcode_id' => $this->user_barcode_id,
            'user_index' => $this->user_index,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'barcode_index', $this->barcode_index]);

        return $dataProvider;
    }
}
