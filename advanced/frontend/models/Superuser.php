<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "superuser".
 *
 * @property integer $super_user_id
 * @property integer $user_index
 * @property string $more
 */
class Superuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'superuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_index', 'more'], 'required'],
            [['user_index'], 'integer'],
            [['more'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'super_user_id' => 'Super User ID',
            'user_index' => 'User Index',
            'more' => 'More',
        ];
    }
    public static function getUsersforSuperUser($id){
        $connection = \Yii::$app->db;
        $model = $connection->createCommand("SELECT username,id,first_name,last_name FROM join_user_superuser INNER JOIN user ON join_user_superuser.user_index = user.id WHERE join_user_superuser.superuser_index =" .$id);
        $user = $model->queryAll();
        if(empty($user)){
            return null;
        }
        else{
            return $user;
        }
    }
}
