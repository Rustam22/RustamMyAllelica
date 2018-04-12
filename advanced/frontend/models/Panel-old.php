<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "panel".
 *
 * @property integer $panel_id
 * @property string $text
 * @property double $score
 *
 * @property JoinPanelProduct[] $joinPanelProducts
 * @property JoinPanelSnp[] $joinPanelSnps
 * @property JoinUserPanel[] $joinUserPanels
 * @property PanelText[] $panelTexts
 */
class Panel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'panel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'score'], 'required'],
            [['text'], 'string'],
            [['score'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'panel_id' => 'Panel ID',
            'text' => 'Text',
            'score' => 'Score',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    /*public function getJoinPanelProducts()
    {
        return $this->hasMany(JoinPanelProduct::className(), ['panel_index' => 'panel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    /*public function getJoinPanelSnps()
    {
        return $this->hasMany(JoinPanelSnp::className(), ['panel_index' => 'panel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinUserPanels()
    {
        return $this->hasMany(JoinUserPanel::className(), ['panel_index' => 'panel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPanelTexts()
    {
        return $this->hasMany(PanelText::className(), ['panel_text_index' => 'panel_id']);
    }
}
