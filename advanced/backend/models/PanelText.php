<?php

namespace backend\models;

use Yii;

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
}
