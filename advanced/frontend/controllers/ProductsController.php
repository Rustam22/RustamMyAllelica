<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 24.01.18
 * Time: 15:08
 */

namespace frontend\controllers;

use Yii;


class ProductsController extends AppController{

    public function actionIndex() {
        return $this->redirect(['prevenzione']);
    }

    public function actionPrevenzione() {
        return $this->render('prevenzione', array('info' => 'Prevenzione'));
    }

    public function actionNutrizione() {
        return $this->render('nutrizione', array('info' => 'Nutrizione'));
    }

}