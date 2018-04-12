<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "biometrics".
 *
 * @property integer $biometrics_id
 * @property integer $user_index
 * @property string $sex
 * @property integer $age
 * @property integer $height
 * @property integer $weight
 * @property string $target
 * @property string $lifestyle
 * @property string $diet
 * @property string $lactose_intolerance
 * @property string $gluten_celiac_intolerance
 * @property string $other
 *
 * @property User $userIndex
 */
class Biometrics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'biometrics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_index', 'sex', 'age', 'height', 'weight', 'target', 'lifestyle', 'diet', 'lactose_intolerance', 'gluten_celiac_intolerance', 'other'], 'required'],
            [['user_index', 'age', 'height', 'weight'], 'integer'],
            [['sex', 'target', 'lifestyle', 'diet', 'lactose_intolerance', 'gluten_celiac_intolerance', 'other'], 'string'],
            [['user_index'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_index' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'biometrics_id' => 'Biometrics ID',
            'user_index' => 'User Index',
            'sex' => 'Sex',
            'age' => 'Age',
            'height' => 'Height',
            'weight' => 'Weight',
            'target' => 'Target',
            'lifestyle' => 'Lifestyle',
            'diet' => 'Diet',
            'lactose_intolerance' => 'Lactose Intolerance',
            'gluten_celiac_intolerance' => 'Gluten Celiac Intolerance',
            'other' => 'Other',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserIndex()
    {
        return $this->hasOne(User::className(), ['id' => 'user_index']);
    }
}