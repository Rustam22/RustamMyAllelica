<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "join_user_status".
 *
 * @property integer $user_status_id
 * @property integer $user_index
 * @property integer $status_index
 *
 * @property User $userIndex
 * @property Status $statusIndex
 */
class JoinUserStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'join_user_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_index', 'status_index'], 'required'],
            [['user_index', 'status_index'], 'integer'],
            [['user_index'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_index' => 'id']],
            [['status_index'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_index' => 'status_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_status_id' => 'User Status ID',
            'user_index' => 'User Index',
            'status_index' => 'Status Index',
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
    public function getStatusIndex()
    {
        return $this->hasOne(Status::className(), ['status_id' => 'status_index']);
    }
}
