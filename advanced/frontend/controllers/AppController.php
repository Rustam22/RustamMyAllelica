<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 25.01.18
 * Time: 15:16
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;


class AppController extends Controller {

    public function sendMail($htmlMessage = '', $textMessage = '', $subject = '') {
        return Yii::$app->mailer->compose()
                                ->setFrom(Yii::$app->params['mail']['from'])
                                ->setTo(Yii::$app->params['mail']['emails'])
                                ->setSubject($subject)
                                ->setTextBody($textMessage)
                                ->setHtmlBody($htmlMessage)
                                ->send();
    }

    public function generateRandomString($length = 15) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}