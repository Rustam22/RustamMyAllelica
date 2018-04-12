<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "join_user_superuser".
 *
 * @property integer $join_user_superuser_id
 * @property integer $user_index
 * @property integer $superuser_index
 */
class JoinUserSuperuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'join_user_superuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_index', 'superuser_index'], 'required'],
            [['user_index', 'superuser_index'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'join_user_superuser_id' => 'Join User Superuser ID',
            'user_index' => 'User Index',
            'superuser_index' => 'Superuser Index',
        ];
    }
}
