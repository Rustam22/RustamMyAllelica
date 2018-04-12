<?php
/**
 * Created by PhpStorm.
 * User: mahmu
 * Date: 1/29/2018
 * Time: 6:47 AM
 */

namespace frontend\controllers;

use frontend\models\MoreBiometrics;
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


class ResultsController extends AppController
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

    public function actionIndex($product) {
            $this->status = "panel";
            $final_array = Yii::$app->helper->main_function($product);
            return $this->render('panel', ['result' => $final_array, 'status' => 'panel', 'product' => $product]);
    }
    public function actionPanel_text($panel,$product){
        $this->status  = "result";
        if(Yii::$app->request->isAjax) {
            $panel = $_GET['panel'];
            $product  = $_GET['product'];
            $text = User::getUserPanel_PaneltextbyUserId(Yii::$app->user->identity->id);
            $data = User::getUserPanel_PaneldataUserId(Yii::$app->user->identity->id);
            $final_array = Yii::$app->helper->main_function($product);
            $score = User::getUserPanel_ScorebyUserId(Yii::$app->user->identity->id);
            $username = Yii::$app->user->identity->first_name;
            $allResults = Panel::getPanelTextbyPanel($panel);
            $panel_id = Panel::getPanelidbyPanelName($panel);
            $joins = Snp::getChart(Yii::$app->user->identity->id,$panel_id);
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

        $final_array = Yii::$app->helper->main_function($product);
        $panel_text  =  User::getUserPanel_PaneltextbyUserId(Yii::$app->user->identity->id);
        return $this->render('panel',['status'  => 'result', 'result' => $final_array,'panel_text' => $panel_text,'product' => $product]);
    }
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

}
