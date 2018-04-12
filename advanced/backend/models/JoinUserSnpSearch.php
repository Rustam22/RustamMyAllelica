<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JoinUserSnp;

/**
 * JoinUserSnpSearch represents the model behind the search form about `backend\models\JoinUserSnp`.
 */
class JoinUserSnpSearch extends JoinUserSnp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_snp_id', 'user_index', 'allele_2'], 'integer'],
            [['snp_index', 'allele_1'], 'safe'],
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
        $query = JoinUserSnp::find();

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
            'user_snp_id' => $this->user_snp_id,
            'user_index' => $this->user_index,
            'allele_2' => $this->allele_2,
        ]);

        $query->andFilterWhere(['like', 'snp_index', $this->snp_index])
            ->andFilterWhere(['like', 'allele_1', $this->allele_1]);

        return $dataProvider;
    }
}
