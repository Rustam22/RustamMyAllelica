<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "join_user_product".
 *
 * @property integer $user_product_id
 * @property integer $user_index
 * @property integer $product_index
 *
 * @property User $userIndex
 * @property Product $productIndex
 */
class JoinUserProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'join_user_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_index', 'product_index'], 'required'],
            [['user_index', 'product_index'], 'integer'],
            [['user_index'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_index' => 'id']],
            [['product_index'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_index' => 'product_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_product_id' => 'User Product ID',
            'user_index' => 'User Index',
            'product_index' => 'Product Index',
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
    public function getProductIndex()
    {
        return $this->hasOne(Product::className(), ['product_id' => 'product_index']);
    }
}
