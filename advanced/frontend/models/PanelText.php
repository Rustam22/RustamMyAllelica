<?php

namespace frontend\models;

use Yii;
use frontend\models\User;
use frontend\models\Panel;

/**
 * This is the model class for table "panel_text".
 *
 * @property integer $panel_text_id
 * @property integer $panel_text_index
 * @property integer $lower_bound
 * @property integer $upper_bound
 * @property string $special_text
 *
 * @property Panel $panelTextIndex
 */
class PanelText extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'panel_text';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['panel_text_index', 'lower_bound', 'upper_bound', 'special_text'], 'required'],
            [['panel_text_index', 'lower_bound', 'upper_bound'], 'integer'],
            [['special_text'], 'string'],
            [['panel_text_index'], 'exist', 'skipOnError' => true, 'targetClass' => Panel::className(), 'targetAttribute' => ['panel_text_index' => 'panel_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'panel_text_id' => 'Panel Text ID',
            'panel_text_index' => 'Panel Text Index',
            'lower_bound' => 'Lower Bound',
            'upper_bound' => 'Upper Bound',
            'special_text' => 'Special Text',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPanelTextIndex()
    {
        return $this->hasOne(Panel::className(), ['panel_id' => 'panel_text_index']);
    }
    public function getPanelTextbyScore($panel){
        $query = Panel::find()->where(['panel.text'=>$panel])->one()->getJoinUserPanels()->asArray()->one();
        print_r($query);
        $result = Panel::find()->where(['panel.text'=>$query])->one()->getPanelTexts()->where(['>','panel_text.upper_bound',$query['score']])->andWhere(['<=','panel_text.lower_bound',$query['score']])->asArray()->all();
        return $result;
    }
    public function getAllPanelText($panel){
        $result = Panel::find()->where(['panel.text'=>$query])->one()->getPanelTexts()->asArray()->all();
	    return $result;
    } 
    public static function getReport(){
        $connection = \Yii::$app->db;
        $model = $connection->createCommand("SELECT panel.text,panel_text.special_text,panel_text.subheader_text,panel_text.more,panel_text.class FROM user INNER JOIN join_user_panel ON user.id = join_user_panel.user_index INNER JOIN panel ON join_user_panel.panel_index = panel.panel_id INNER JOIN panel_text ON panel.panel_id = panel_text.panel_text_index WHERE join_user_panel.score >= panel_text.lower_bound AND join_user_panel.score < panel_text.upper_bound AND user.id=:id ORDER BY panel.panel_order")->bindValue(':id', Yii::$app->user->identity->id);
        $user = $model->queryAll();
        return($user);
    }
    public static function getInfo(){
        $connection = \Yii::$app->db;
        $model = $connection->createCommand("SELECT panel.text,panel_text.good_food,panel_text.normal_food,panel_text.bad_food FROM user INNER JOIN join_user_panel ON user.id = join_user_panel.user_index INNER JOIN panel ON join_user_panel.panel_index = panel.panel_id INNER JOIN panel_text ON panel.panel_id = panel_text.panel_text_index WHERE join_user_panel.score >= panel_text.lower_bound AND join_user_panel.score < panel_text.upper_bound AND user.id=:id ORDER BY panel.panel_order ")->bindValue(':id', Yii::$app->user->identity->id);
        $user = $model->queryAll();
        return($user);
    }

}
