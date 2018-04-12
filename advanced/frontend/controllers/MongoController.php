<?php

namespace frontend\controllers;
use Yii;

class MongoController extends AppController {


    public function actionIndex(){
        $manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new \MongoDB\Driver\BulkWrite;
        $json = file_get_contents("../views/results/test.json");
        $obj = json_decode($json,true);
        $bulk->delete(['user_id' => '21']);
        foreach ($obj as $ob){
            $bulk->insert($ob);
        }
        $result = $manager->executeBulkWrite('diet.user_diet', $bulk);
    }
}
