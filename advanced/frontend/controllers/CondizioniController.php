<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 29.01.18
 * Time: 11:48
 */

namespace frontend\controllers;


class CondizioniController extends AppController {

    public function actionIndex() {
        return $this->redirect(['condizioni']);
    }

    public function actionCondizioni() {
        return $this->render('condizioni', ['info' => 'Main Condizioni']);
    }

}