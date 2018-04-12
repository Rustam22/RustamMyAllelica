<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "snp".
 *
 * @property string $snp_id
 * @property string $gene
 *
 * @property JoinPanelSnp[] $joinPanelSnps
 * @property JoinUserSnp[] $joinUserSnps
 */
class Snp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'snp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['snp_id', 'gene'], 'required'],
            [['snp_id', 'gene'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'snp_id' => 'Snp ID',
            'gene' => 'Gene',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinPanelSnps()
    {
        return $this->hasMany(JoinPanelSnp::className(), ['snp_index' => 'snp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinUserSnps()
    {
        return $this->hasMany(JoinUserSnp::className(), ['snp_index' => 'snp_id']);
    }
}
