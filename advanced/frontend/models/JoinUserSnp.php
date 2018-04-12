<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "join_user_snp".
 *
 * @property integer $user_snp_id
 * @property integer $user_index
 * @property string $snp_index
 * @property string $allele_1
 * @property string $allele_2
 * @property integer $panel_index
 *
 * @property User $userIndex
 * @property Snp $snpIndex
 * @property Panel $panelIndex
 */
class JoinUserSnp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'join_user_snp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_index', 'snp_index', 'allele_1', 'allele_2', 'panel_index'], 'required'],
            [['user_index', 'panel_index'], 'integer'],
            [['snp_index'], 'string', 'max' => 20],
            [['allele_1', 'allele_2'], 'string', 'max' => 50],
            [['user_index'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_index' => 'id']],
            [['snp_index'], 'exist', 'skipOnError' => true, 'targetClass' => Snp::className(), 'targetAttribute' => ['snp_index' => 'snp_id']],
            [['panel_index'], 'exist', 'skipOnError' => true, 'targetClass' => Panel::className(), 'targetAttribute' => ['panel_index' => 'panel_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_snp_id' => 'User Snp ID',
            'user_index' => 'User Index',
            'snp_index' => 'Snp Index',
            'allele_1' => 'Allele 1',
            'allele_2' => 'Allele 2',
            'panel_index' => 'Panel Index',
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
    public function getSnpIndex()
    {
        return $this->hasOne(Snp::className(), ['snp_id' => 'snp_index']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPanelIndex()
    {
        return $this->hasOne(Panel::className(), ['panel_id' => 'panel_index']);
    }
}
