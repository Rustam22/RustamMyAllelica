<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product_payment".
 *
 * @property integer $id
 * @property string $email
 * @property integer $product_id
 * @property integer $price
 */
class ProductPayment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'product_id', 'price'], 'required'],
            [['email'], 'string'],
            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'unique'],
            [['product_id', 'price'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'product_id' => 'Product ID',
            'price' => 'Price',
        ];
    }
}
