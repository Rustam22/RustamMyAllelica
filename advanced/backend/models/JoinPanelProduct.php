<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "join_panel_product".
 *
 * @property integer $panel_product_id
 * @property integer $panel_index
 * @property integer $product_index
 *
 * @property Panel $panelIndex
 * @property Product $productIndex
 */
class JoinPanelProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'join_panel_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['panel_index', 'product_index'], 'required'],
            [['panel_index', 'product_index'], 'integer'],
            [['panel_index'], 'exist', 'skipOnError' => true, 'targetClass' => Panel::className(), 'targetAttribute' => ['panel_index' => 'panel_id']],
            [['product_index'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_index' => 'product_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'panel_product_id' => 'Panel Product ID',
            'panel_index' => 'Panel Index',
            'product_index' => 'Product Index',
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
    public function getProductIndex()
    {
        return $this->hasOne(Product::className(), ['product_id' => 'product_index']);
    }
}
