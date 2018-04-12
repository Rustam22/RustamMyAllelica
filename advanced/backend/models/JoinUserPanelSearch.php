<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JoinUserPanel;

/**
 * JoinUserPanelSearch represents the model behind the search form about `backend\models\JoinUserPanel`.
 */
class JoinUserPanelSearch extends JoinUserPanel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_panel_id', 'user_index', 'panel_index', 'score'], 'integer'],
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
        $query = JoinUserPanel::find();

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
            'user_panel_id' => $this->user_panel_id,
            'user_index' => $this->user_index,
            'panel_index' => $this->panel_index,
            'score' => $this->score,
        ]);

        return $dataProvider;
    }
}
