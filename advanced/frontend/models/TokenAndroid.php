<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "token_android".
 *
 * @property integer $token_id
 * @property integer $user_index
 * @property string $token
 * @property string $date
 */
class TokenAndroid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'token_android';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_index', 'token', 'date'], 'required'],
            [['user_index'], 'integer'],
            [['date'], 'safe'],
            [['token'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'token_id' => 'Token ID',
            'user_index' => 'User Index',
            'token' => 'Token',
            'date' => 'Date',
        ];
    }
    public function insertToken(){
        $connection = \Yii::$app->db;
        $model = $connection->createCommand("SELECT * FROM user WHERE id =" .$id);
        $user = $model->queryAll();
        return $user;
    }
}
