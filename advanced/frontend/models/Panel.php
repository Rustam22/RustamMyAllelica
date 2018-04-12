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
    public static function getSubpanelforPanel($text){
        $result_array = array();
        $panel_id = Panel::find()->where(['text' => $text])->one();
        $result = Subpanel::find()->where(['panel_index' => $panel_id['panel_id']])->all();
        foreach ($result as $res){
            $result_array[$res['text']] = $res['data'];
        }
        return $result_array;
    }

    public static function getPanelTextbyPanel($text){
        $result_array =  array();
        $result  =  Panel::find()->where(['text' => $text])->one()->getPanelTexts()->all();
        foreach ($result as $res){
            //$result_array[$res['lower_bound']] = $res['special_text'];
            array_push($result_array,$res['special_text']);
        }
        return $result_array;

    }

    public static function getPanelidbyPanelName($text){
        $panel_id = Panel::find()->select('panel_id')->where(['text' => $text])->one();
        return $panel_id['panel_id'];
    }
}
