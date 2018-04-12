<?php

namespace frontend\components;


use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

use frontend\models\User;
use frontend\models\Product;

class Helper extends Component{
    public function welcome(){
        echo "Hello..Welcome to MyComponent";
    }
    public function main_function($product){
        $final_array = array();
        $user_panels = User::getUserPanelsbyUserId(Yii::$app->user->identity->id);
        $product_panels = Product::getProductPanelsbyProductName($product);
        $intersection = User::getUserPanelsbyProduct($user_panels,$product_panels);
        $panel_score = User::getUserPanel_ScorebyUserId(Yii::$app->user->identity->id);
        $user_result = User::getUserResult_full($panel_score);
        foreach($user_result as $key => $value){
            if(in_array($key, $intersection)){
                $final_array[$key] = $value;
            }
        }
	//clean
	$copy = array();
	$count = 0;

	$carbIns = false;
	foreach($final_array as $k=>$val) {
		$val['original_key'] = $k;
		if( stristr($k,'carb') ) {
			if( !$carbIns  ) {
				//var_dump($val['class']);var_dump($count);
				if($val['class'] == 'high' || $count == 2) {
					$carbIns = true;
					$copy['Sensibilità ai carboidrati'] = $val;
				}
			$count++;
			}
		} else {
			$copy[$k] = $val;
		}
	} 
        return $copy;
    }
    public function main_function_super($product,$user_id){
        $final_array = array();
        $user_panels = User::getUserPanelsbyUserId($user_id);
        $product_panels = Product::getProductPanelsbyProductName($product);
        $intersection = User::getUserPanelsbyProduct($user_panels,$product_panels);
        $panel_score = User::getUserPanel_ScorebyUserId($user_id);
        $user_result = User::getUserResult_full($panel_score);
        foreach($user_result as $key => $value){
            if(in_array($key, $intersection)){
                $final_array[$key] = $value;
            }
        }
        //clean
        $copy = array();
        $count = 0;

        $carbIns = false;
        foreach($final_array as $k=>$val) {
            $val['original_key'] = $k;
            if( stristr($k,'carb') ) {
                if( !$carbIns  ) {
                    //var_dump($val['class']);var_dump($count);
                    if($val['class'] == 'high' || $count == 2) {
                        $carbIns = true;
                        $copy['Sensibilità ai carboidrati'] = $val;
                    }
                    $count++;
                }
            } else {
                $copy[$k] = $val;
            }
        }
        return $copy;
    }
}
