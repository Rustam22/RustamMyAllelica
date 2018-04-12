<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "barcode".
 *
 * @property integer $barcode_id
 * @property string $code
 * @property string $status
 *
 * @property JoinUserBarcode[] $joinUserBarcodes
 */
class Barcode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barcode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'status'], 'required'],
            [['status'], 'string'],
            [['code'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'barcode_id' => 'Barcode ID',
            'code' => 'Code',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinUserBarcodes()
    {
        return $this->hasMany(JoinUserBarcode::className(), ['barcode_index' => 'code']);
    }
}
