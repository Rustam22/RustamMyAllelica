<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $product_id
 * @property string $value
 *
 * @property JoinPanelProduct[] $joinPanelProducts
 * @property JoinUserProduct[] $joinUserProducts
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'required'],
            [['value'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'value' => 'Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinPanelProducts()
    {
        return $this->hasMany(JoinPanelProduct::className(), ['product_index' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinUserProducts()
    {
        return $this->hasMany(JoinUserProduct::className(), ['product_index' => 'product_id']);
    }
    public static function getProductPanelsbyProductName($name){
        $result_array = array();
        $result = Product::find()->where(['value'=>$name])->one()->getJoinPanelProducts()->with("panelIndex")->with("productIndex")->asArray()->all();
        foreach($result as $res){
            array_push($result_array,$res['panelIndex']['text']);
        }
        return $result_array;
    }
}
