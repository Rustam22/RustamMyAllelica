<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sub_panel".
 *
 * @property integer $sub_panel_id
 * @property integer $panel_index
 * @property string $text
 * @property string $data
 *
 * @property Panel $panelIndex
 */
class SubPanel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_panel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_panel_id', 'panel_index', 'text', 'data'], 'required'],
            [['sub_panel_id', 'panel_index'], 'integer'],
            [['text', 'data'], 'string'],
            [['panel_index'], 'exist', 'skipOnError' => true, 'targetClass' => Panel::className(), 'targetAttribute' => ['panel_index' => 'panel_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_panel_id' => 'Sub Panel ID',
            'panel_index' => 'Panel Index',
            'text' => 'Text',
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPanelIndex()
    {
        return $this->hasOne(Panel::className(), ['panel_id' => 'panel_index']);
    }
}
