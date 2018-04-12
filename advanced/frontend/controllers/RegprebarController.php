<?php

/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 24.01.18
 * Time: 15:10
 */

namespace frontend\controllers;

use Yii;
use frontend\models\BarcodeControl;
use frontend\models\SignupForm;
use frontend\models\Barcode;


class RegprebarController extends AppController {

    public function actionIndex() {
        return $this->redirect(['register']);
    }

    public function actionRegister() {
        return $this->render('register', array('info' => 'Register'));
    }

    /*public function actionLogin() {
        return $this->render('login', array('info' => 'Login'));
    }*/

    /*public function actionBarcode() {
        return $this->render('barcode', array('info' => 'Barcode'));
    }*/

    public function actionPrenotaritiro() {
        return $this->render('prenotaritiro', array('info' => 'Prenota Ritiro'));
    }


    public function actionLogin() {
        return $this->redirect(['acquista/acquistabarcode']);
        $model = new BarcodeControl();
        $sign_up_model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            $barcodes = Barcode::find()->all();
            foreach($barcodes as $barcode){
            if(in_array("$model->barcode", (array)$barcode['code']) ){
                    $status = Barcode::find()->where(['code' => $model->barcode]);
                    if($barcode['status'] == 'ready'){
                        return $this->render('/site/signup',['model' => $sign_up_model]);
                    }else{
                        return $this->render('result', ['model' => $model,  'barcodes' => $barcodes]);
                    }
                }
            }
            return $this->render('result', ['model' => $model,  'barcodes' => $barcodes]);
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

}