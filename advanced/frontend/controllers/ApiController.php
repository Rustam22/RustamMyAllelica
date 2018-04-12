<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 29.01.18
 * Time: 11:48
 */


namespace frontend\controllers;


use common\models\LoginForm;
use frontend\models\TokenAndroid;
use Yii;

class ApiController extends AppController {

    public function actionIndex($email,$password) {

        $model = new LoginForm();
        $model_token = new TokenAndroid();
        $model->username = $email;
        $model->password = $password;
        if($model->login()){
            $date1=date_create("2013-03-15");
            $date2=date_create("2013-03-16");
            $date = date("D M d, Y G:i");
            $timestamp = date('Y-m-d', strtotime($date));
            $diff=date_diff($date1,$date2);
            $token = bin2hex(random_bytes(16));
            $model_token->user_index = Yii::$app->user->identity->id;
            $model_token->date = $timestamp;
            $model_token->token = $token;
            $model_token->save();
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            if($diff->format("%a") ==1) {
                $result = ['date' => $timestamp,'token' => $token];
            }
            return $result;
        }
        else{
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $result = ['sorry' => 'sorry email or password is wrong'];
            return $result;
        }
    }
    public function actionResults($token){
        $connection = \Yii::$app->db;
        $model = $connection->createCommand("SELECT panel.text,panel_text.special_text FROM token_android INNER JOIN join_user_panel ON token_android.user_index = join_user_panel.user_index INNER JOIN panel ON join_user_panel.panel_index = panel.panel_id INNER JOIN panel_text ON panel.panel_id = panel_text.panel_text_index WHERE join_user_panel.score BETWEEN panel_text.lower_bound AND panel_text.upper_bound AND  token_android.token = " .$token);
        $user = $model->queryAll();
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return($user);

    }

}