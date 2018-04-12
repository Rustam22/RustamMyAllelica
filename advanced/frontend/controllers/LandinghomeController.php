<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 24.01.18
 * Time: 15:05
 */

namespace frontend\controllers;

use Yii;


class LandinghomeController extends AppController{

    public function actionIndex() {
        /*return $this->render('index', array('info' => 'Landing Home'));*/
        return $this->redirect('/site/login');
        //return $this->render("//site/login");
    }

}
