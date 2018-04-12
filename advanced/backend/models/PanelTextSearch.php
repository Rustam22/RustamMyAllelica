<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PanelText;

/**
 * PanelTextSearch represents the model behind the search form about `backend\models\PanelText`.
 */
class PanelTextSearch extends PanelText
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['panel_text_id', 'panel_text_index', 'lower_bound', 'upper_bound'], 'integer'],
            [['special_text'], 'safe'],
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
        $query = PanelText::find();

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
            'panel_text_id' => $this->panel_text_id,
            'panel_text_index' => $this->panel_text_index,
            'lower_bound' => $this->lower_bound,
            'upper_bound' => $this->upper_bound,
        ]);

        $query->andFilterWhere(['like', 'special_text', $this->special_text]);

        return $dataProvider;
    }
}
