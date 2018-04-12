<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 24.01.18
 * Time: 15:23
 */

namespace frontend\controllers;

use Yii;
use frontend\models\SignupForm;
use frontend\models\ProductPayment;
use frontend\models\BarcodeControl;
use frontend\models\Barcode;
use yii\db\Exception;
use yii\helpers\Url;

// dfdfffd
//dfdfdfd




class AcquistaController extends AppController {

    private $nutrizionePrice  = 170;
    private $nutrizioneId     = 1;

    private $prevenzionePrice = 169;
    private $prevenzionePrice = 170;
    private $prevenzioneId    = 2;

    private $acquistaPrice = 249;
    private $acquistaId    = 3;

    private $context = array();


    public function actionIndex() {
        return $this->redirect(['acquista/acquistabuy']);
    }


    /*public function actionAcquistabuy() {
        return $this->render('acquista', ['info' => 'Main acquista', 'price' => $this->acquistaPrice, 'status' => 'buy']);
    }*/

    public function actionAcquistapayment() {
        $model = new ProductPayment();
        $this->context['price']  = $this->acquistaPrice;
        $this->context['status'] = 'payment';
        $this->context['info']   = 'Main acquista';
        $this->context['model']  = $model;
        $this->context['condition'] = '';

        if ($model->load(Yii::$app->request->post())) {

            $model->product_id = $this->acquistaId;
            $model->price = $this->acquistaPrice;

            if($model->save()) {

                if($this->sendMail(Yii::$app->request->post()['ProductPayment']['email'], 'Pacchetto Completo')) {
                ///if(mail("rustam.atakisiev@gmail.com","My subject",'sdfsdfsdfsd')) {
                    $this->context['condition'] = 'dataSaveSuccessEmailSuccess';
                } else {
                    $this->context['condition'] = 'dataSaveSuccessEmailError';
                }

                return $this->render('acquista', $this->context);
            } else {
                $this->context['condition'] = 'dataSaveError';
                return $this->render('acquista', $this->context);
            }
        } else {
            $this->context['condition'] = 'postDoesNotExists';
            return $this->render('acquista', $this->context);
        }
    }


   /* public function actionAcquistabarcode() {
        $barcodemodel = new BarcodeControl();

        $this->context['status'] = 'barcode';
        $this->context['info']   = 'Acquista barcode';
        $this->context['model']  = $barcodemodel;
        $this->context['condition'] = '';

        if ($barcodemodel->load(Yii::$app->request->post())) {
            $barcodes = Barcode::find()->all();

            foreach($barcodes as $barcode){
                if(in_array("$barcodemodel->barcode", (array)$barcode['code']) ){

                    if($barcode['status'] == 'ready') {
                        $encryptedData = Yii::$app->getSecurity()->encryptByPassword($barcodemodel->barcode, Yii::$app->params['key']['value']);

                        return $this->redirect(['acquista/acquistaregister', 'code' => $encryptedData]);
                    } else {
                        $this->context['model']  = $barcodemodel;
                        $this->context['barcodes']  = $barcodes;
                        $this->context['condition'] = 'wrongBarcode';

                        return $this->render('acquista', $this->context);
                    }
                }
            }

            $this->context['model']  = $barcodemodel;
            $this->context['barcodes']  = $barcodes;
            $this->context['condition'] = 'wrongBarcode';
            return $this->render('acquista', $this->context);
        }

        $this->context['condition'] = 'new';
        return $this->render('acquista', $this->context);
    }*/


    public function actionAcquistaregister() {
        if (Yii::$app->user->isGuest) {

            $signModel = new SignupForm();

            $this->context['model'] = $signModel;
            $this->context['info'] = 'Main acquista';
            $this->context['price'] = $this->acquistaPrice;
            $this->context['status'] = 'register';

            if ($signModel->load(Yii::$app->request->post()) && ($user = $signModel->signup())) {

                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }

                /************  Send an email after successful sign up  ************/
                /*array_push(Yii::$app->params['mail']['emails'], $signModel->email);
                $url = 'href="'.Url::home(true).'site/results/'.$user->getAuthKey().' - '.$user->getIsActive().'"';
                $this->context['userMessage'] = "<p><a $url>Press link</a></p>";

                if ($this->sendMail($this->context['userMessage'], '', 'Allelica, Sign Up')) {
                    if (Yii::$app->getUser()->login($user)) {
                        return $this->goHome();
                    }
                } else {
                    $this->context['sendEmail'] = 'false';
                    return $this->render('acquista', $this->context);
                }*/
            }

            $this->context['sendEmail'] = 'nonactive';
            return $this->render('acquista', $this->context);
        }

        return $this->goHome();
    }


    public function actionNutrizione() {
        return $this->render('nutrizione', ['info' => 'Nutrizione', 'price' => '169']);
    }

    public function actionPrevenzione() {
        return $this->render('prevenzione', ['info' => 'Prevenzione', 'price' => '169']);
    }

}