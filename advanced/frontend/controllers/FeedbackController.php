<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 24.01.18
 * Time: 15:20
 */

namespace frontend\controllers;

use Yii;


class FeedbackController extends AppController {

    public function actionIndex() {
        return $this->render('feedback', array('info' => 'Feedback'));
    }

    public function actionFeedback() {
        return $this->render('feedback', array('info' => 'Feedback'));
    }

}