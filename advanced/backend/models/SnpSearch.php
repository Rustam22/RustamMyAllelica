<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Snp;

/**
 * SnpSearch represents the model behind the search form about `backend\models\Snp`.
 */
class SnpSearch extends Snp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['snp_primary_id'], 'integer'],
            [['snp_id', 'gene'], 'safe'],
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
        $query = Snp::find();

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
            'snp_primary_id' => $this->snp_primary_id,
        ]);

        $query->andFilterWhere(['like', 'snp_id', $this->snp_id])
            ->andFilterWhere(['like', 'gene', $this->gene]);

        return $dataProvider;
    }
}
