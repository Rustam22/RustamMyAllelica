<?php

namespace frontend\models;

use Yii;


/**
 * This is the model class for table "snp".
 *
 * @property integer $snp_primary_id
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
            'snp_primary_id' => 'Snp Primary ID',
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

    public static function getChart($user_id,$panel_id){
        $snp = [];
        $gene = [];
        $effective_allele = [];
        $allele_1  = [];
        $allele_2  = [];

        //$result_array = [];
        //$red = [];
        $joins = JoinUserSnp::find()->select('snp_index,allele_1,allele_2')->where(['user_index' => $user_id])->andWhere(['panel_index' =>$panel_id])->all();
        foreach ($joins as $join){
            $result_1 = JoinPanelSnp::find()->select('effective_allele')->where(['snp_index' => $join['snp_index']])->andWhere(['panel_index' => $panel_id])->one();
            $result = Snp::find()->select('gene')->where(['snp_id' => $join['snp_index']])->one();
            array_push($gene,$result['gene']);
            array_push($snp,$join['snp_index']);
            array_push($effective_allele,$result_1['effective_allele']);
            array_push($allele_1, $join['allele_1']);
            array_push($allele_2, $join['allele_2']);
            /*$result_array['gene'] =  $result['gene'];
            $result_array['effective_allele'] =  $result_1['effective_allele'];
            $result_array['snp'] =  $join['snp_index'];
            $result_array['allele_1'] =  $join['allele_1'];
            $result_array['allele_2'] =  $join['allele_2'];*/
        }
        $mapped =  array_map(null, $gene, $snp, $effective_allele,$allele_1,$allele_2);
        //$red['snp']
        //$data['data'] = $result_array;
        return $mapped;
    }
}
