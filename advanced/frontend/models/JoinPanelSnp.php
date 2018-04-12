<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "join_panel_snp".
 *
 * @property integer $panel_snp_id
 * @property string $snp_index
 * @property integer $panel_index
 * @property string $effective_allele
 *
 * @property Panel $panelIndex
 * @property Snp $snpIndex
 */
class JoinPanelSnp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'join_panel_snp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['snp_index', 'panel_index', 'effective_allele'], 'required'],
            [['panel_index'], 'integer'],
            [['snp_index', 'effective_allele'], 'string', 'max' => 20],
            [['panel_index'], 'exist', 'skipOnError' => true, 'targetClass' => Panel::className(), 'targetAttribute' => ['panel_index' => 'panel_id']],
            [['snp_index'], 'exist', 'skipOnError' => true, 'targetClass' => Snp::className(), 'targetAttribute' => ['snp_index' => 'snp_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'panel_snp_id' => 'Panel Snp ID',
            'snp_index' => 'Snp Index',
            'panel_index' => 'Panel Index',
            'effective_allele' => 'Effective Allele',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPanelIndex()
    {
        return $this->hasOne(Panel::className(), ['panel_id' => 'panel_index']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSnpIndex()
    {
        return $this->hasOne(Snp::className(), ['snp_id' => 'snp_index']);
    }
}
