<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $address
 * @property string $city
 * @property string $zip_code
 * @property string $mobile
 * @property string $note
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property JoinUserBarcode[] $joinUserBarcodes
 * @property JoinUserPanel[] $joinUserPanels
 * @property JoinUserProduct[] $joinUserProducts
 * @property JoinUserSnp[] $joinUserSnps
 * @property JoinUserStatus[] $joinUserStatuses
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'username', 'auth_key', 'password_hash', 'email', 'address', 'city', 'zip_code', 'mobile', 'note'], 'required'],
            [['note'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 100],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['address', 'city'], 'string', 'max' => 50],
            [['zip_code', 'mobile'], 'string', 'max' => 20],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'address' => 'Address',
            'city' => 'City',
            'zip_code' => 'Zip Code',
            'mobile' => 'Mobile',
            'note' => 'Note',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinUserBarcodes()
    {
        return $this->hasMany(JoinUserBarcode::className(), ['user_index' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinUserPanels()
    {
        return $this->hasMany(JoinUserPanel::className(), ['user_index' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinUserProducts()
    {
        return $this->hasMany(JoinUserProduct::className(), ['user_index' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinUserSnps()
    {
        return $this->hasMany(JoinUserSnp::className(), ['user_index' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinUserStatuses()
    {
        return $this->hasMany(JoinUserStatus::className(), ['user_index' => 'id']);
    }
}
