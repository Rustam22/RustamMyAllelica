<?php
/**
 * Created by PhpStorm.
 * User: mahmu
 * Date: 1/29/2018
 * Time: 6:47 AM
 */

namespace frontend\controllers;

use frontend\models\Superuser;
use frontend\models\User;
use frontend\models\Panel;
use frontend\models\Snp;
use frontend\models\PanelText;
use frontend\models\Product;
use frontend\models\JoinUserPanel;
use Yii;
use Yii\web\Response;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use frontend\models\Biometrics;



class SuperController extends AppController
{
    private $status ;
    public static $array_result;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['panel_text', 'index'],
                'rules' => [
                    [
                        'actions' => ['panel_text'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex($product,$user_id) {
        $this->status = "panel";
        $user = Superuser::getUsersforSuperUser($user_id);
        $user_detail = User::getUserDetailsbyUserId($user_id);
        $final_array = Yii::$app->helper->main_function_super($product,$user_id);
        return $this->render('panel', ['result' => $final_array, 'status' => 'panel', 'product' => $product, 'user_id' => $user_id,'user' => $user,'user_detail' => $user_detail]);
    }
    public function actionPanel_text($panel,$product,$user_id){
        $this->status  = "result";
        if(Yii::$app->request->isAjax) {
            $panel = $_GET['panel'];
            $product  = $_GET['product'];
            $text = User::getUserPanel_PaneltextbyUserId($user_id);
            $data = User::getUserPanel_PaneldataUserId($user_id);
            $final_array = Yii::$app->helper->main_function_super($product,$user_id);
            $score = User::getUserPanel_ScorebyUserId($user_id);
            $username = Yii::$app->user->identity->first_name;
            $allResults = Panel::getPanelTextbyPanel($panel);
            $panel_id = Panel::getPanelidbyPanelName($panel);
            $joins = Snp::getChart($user_id,$panel_id);
            $user = Superuser::getUsersforSuperUser($user_id);
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return [
                'base_text'  => $text[$panel],
                'panel_data' => $data[$panel],
                'final_array' => $final_array,
                'score' => $score[$panel],
                'first_name'  => $username,
                'allResults' => $allResults,
                'joins' => $joins,
            ];
        }

        $final_array = Yii::$app->helper->main_function_super($product,$user_id);
        $user = User::getUserDetailsbyUserId($user_id);
        $panel_text  =  User::getUserPanel_PaneltextbyUserId($user_id);


        $validUserId = true;

        $connection = \Yii::$app->db;
        $model = $connection->createCommand("SELECT * FROM `join_user_superuser` WHERE `join_user_superuser`.`superuser_index` = ".Yii::$app->user->id." AND `join_user_superuser`.`user_index` = ".$user_id." ");
        $isUserExist = $model->queryAll();
//        echo '<pre>'; print_r(Yii::$app->user->id); echo '</pre>';
//        echo '<pre>'; print_r($user_id); echo '</pre>';
//        echo '<pre>'; print_r($isUserExist); echo '</pre>';

        if(empty($isUserExist)) {
            $validUserId = false;
        }


        return $this->render('panel',['status'  => 'result', 'validUserId' => $validUserId, 'result' => $final_array,'panel_text' => $panel_text,'product' => $product,'user_id' => $user_id,'user' => $user]);
    }
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionTest()
    {
        $result = User::getUserPanelsbyUserId(Yii::$app->user->identity->id);
        //print_r($result);
        echo "<br>";
        $result1 = User::getUserProductsbyUserId(Yii::$app->user->identity->id);
        //print_r($result1);
        echo "<br>";
        $result2 = Product::getProductPanelsbyProductName('Prevenzione');
        //print_r($result2);
        $result3 = User::getUserPanelsbyProduct($result,$result2);
        echo "<br>";
        //print_r($result3);
        $result4 = User::getUserPanel_ScorebyUserId(Yii::$app->user->identity->id);
        echo "<br>";
        //print_r($result4);
        $result5 = User::getUserPanel_PaneltextbyUserId(Yii::$app->user->identity->id);
        echo "<br>";
        //print_r($result5);
        //$result6 = User::getUserPanel_PaneldataUserId(Yii::$app->user->identity->id);
        //echo "<br>";
        //print_r($result6);
        //$result6 = User::getUserResult($result4);
        //echo "<br>";
        //print_r($result6);
        //Yii::$app->helper->welcome();
        //print_r(User::getUserBiometricStatus(Yii::$app->user->identity->id));
        //print_r(User::first_time(Yii::$app->user->identity->id));
        //print_r(Panel::getSubpanelforPanel('Alcohol'));
        //$str = file_get_contents('../views/results/data.json');
        //$json = json_decode($str, true);
        //echo '<pre>' . print_r($json, true) . '</pre>';
        //changeStatus($barcode)
        $user = Superuser::getUsersforSuperUser(13);
        print_r($user);
    }

}
