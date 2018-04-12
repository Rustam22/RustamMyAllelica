<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "join_user_panel".
 *
 * @property integer $user_panel_id
 * @property integer $user_index
 * @property integer $panel_index
 * @property integer $score
 *
 * @property User $userIndex
 * @property Panel $panelIndex
 */
class JoinUserPanel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'join_user_panel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_index', 'panel_index', 'score'], 'required'],
            [['user_index', 'panel_index', 'score'], 'integer'],
            [['user_index'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_index' => 'id']],
            [['panel_index'], 'exist', 'skipOnError' => true, 'targetClass' => Panel::className(), 'targetAttribute' => ['panel_index' => 'panel_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_panel_id' => 'User Panel ID',
            'user_index' => 'User Index',
            'panel_index' => 'Panel Index',
            'score' => 'Score',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserIndex()
    {
        return $this->hasOne(User::className(), ['id' => 'user_index']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPanelIndex()
    {
        return $this->hasOne(Panel::className(), ['panel_id' => 'panel_index']);
    }
}
