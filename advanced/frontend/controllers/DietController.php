<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 29.01.18
 * Time: 11:48
 */

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\User;
use frontend\models\PanelText;
use frontend\models\Biometrics;
use frontend\models\MoreBiometrics;

//require ("../views/diet/fpdf/fpdf.php");
//require ("/var/www/html/webapp_dev/advanced/frontend/components/mpdf/mpdf.php");
require_once ("../components/mpdf/mpdf.php");

class DietController extends Controller {


    private function _doDiet() {
        $manager = new \MongoDB\Driver\Manager("mongodb://newext:0nmdcdnv7@34.253.125.110:27017/admin");
        $query = new \MongoDB\Driver\Query(array('user_id' => Yii::$app->user->identity->id));
        try {
            $cursor = $manager->executeQuery('admin.user_diet', $query);
            $cursor_def = $manager->executeQuery('admin.user_diet_default', $query);
            $my_variable = $cursor->toArray();
            $def = $cursor_def->toArray();
            foreach ($my_variable as $my){
                unset($my->_id);
            }
            foreach ($def as $my){
                unset($my->_id);
            }
            return array($my_variable,$def);
        } catch(\MongoDB\Driver\Exception $e) {
            echo $e->getMessage(), "\n";
            exit;
        }
    }

    public function actionIndex(){
        if (User::first_time(Yii::$app->user->identity->id)){
            $model = new Biometrics();
            $more_model = new MoreBiometrics();
            if( $model->load(Yii::$app->request->post()) ){
                $model->user_index = Yii::$app->user->identity->id;
                if( $model->validate()){
                    $model->save();
                    if( $more_model->load(Yii::$app->request->post()) ){
                        $more_model->user_index = Yii::$app->user->identity->id;
                        //if(Yii::$app->user->identity->id != 49)
                        $more_model->save(false);
                    }
                }
                $res = $this->_doDiet();
                if(count($res[0]) == 0) {
                    return $this->render('loading');
                } else {
                    return $this->render('test', ['my_variable' => $res[0],'my_variable_def' => $res[1]]);
                }
            }
            //$final_array = Yii::$app->helper->main_function($product);
            //return $this->render('panel', ['result' => $final_array, 'status' => 'panel', 'product' => $product]);
            //$this->status =  "biometrics";
            return $this->render('biometrics', ['model' => $model]);

        } else {
            $res = $this->_doDiet();
            if(count($res[0]) == 0) {
                return $this->render('loading');
            } else {
                return $this->render('test', ['my_variable' => $res[0],'my_variable_def' => $res[1]]);
            }
        }
    }

    public function actionSubmit()
    {
        $submit = Yii::$app->request->post('submit');
        $result = json_decode($submit);
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $manager = new \MongoDB\Driver\Manager("mongodb://newext:0nmdcdnv7@34.253.125.110:27017/admin");
            $bulk = new \MongoDB\Driver\BulkWrite;
            $bulk->delete(['user_id' =>  Yii::$app->user->identity->id]);
            foreach ($result as $ob){
                $bulk->insert($ob);
            }
            $result1 = $manager->executeBulkWrite('admin.user_diet', $bulk);
            return [
                'submit' => $result,
            ];
        }
    }

    public function actionSubmitsymptom()
    {
        $data = Yii::$app->request->post('data');
        $insert = array('user_id' => Yii::$app->user->identity->id , 'data' => $data);
        if (Yii::$app->request->isAjax) {
            $manager = new \MongoDB\Driver\Manager("mongodb://newext:0nmdcdnv7@34.253.125.110:27017/admin");
            $bulk = new \MongoDB\Driver\BulkWrite;
            $bulk->insert($insert);
            $result1 = $manager->executeBulkWrite('admin.user_symptom', $bulk);
        }
    }

    public function actionDownload(){
        $meal_times = array("Colazione","Spuntino","Pranzo","Spuntino","Cena");
        header('Content-Type: application/pdf');
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,10,'Report',1,1,'C');
        $pdf->Cell(0,30,'Monday',1,1,'C');
        $count = 0;
        foreach ($this->createDiet(0) as $monday){
            $pdf->Cell(0,15,"{$meal_times[$count]}",1,1,'C');
            $meal = explode(',',$monday);
            foreach ($meal  as $diet_meal){
                $pdf->Cell(0,10,"{$diet_meal}",1,1,'C');
            }
            $count = $count + 1;
        }
        $pdf->Cell(0,30,'Tuesday',1,1,'C');
        $count = 0;
        foreach ($this->createDiet(1) as $tuesday){
            $pdf->Cell(0,15,"{$meal_times[$count]}",1,1,'C');
            $meal = explode(',',$tuesday);
            foreach ($meal  as $diet_meal){
                $pdf->Cell(0,10,"{$diet_meal}",1,1,'C');
            }
            $count = $count + 1;
        }
        $pdf->Cell(0,30,'Wednesday',1,1,'C');
        $count = 0;
        foreach ($this->createDiet(2) as $wednesday){
            $pdf->Cell(0,15,"{$meal_times[$count]}",1,1,'C');
            $meal = explode(',',$wednesday);
            foreach ($meal  as $diet_meal){
                $pdf->Cell(0,10,"{$diet_meal}",1,1,'C');
            }
            $count = $count + 1;
        }
        $pdf->Cell(0,30,'Thursday',1,1,'C');
        $count = 0;
        foreach ($this->createDiet(3) as $thursday){
            $pdf->Cell(0,15,"{$meal_times[$count]}",1,1,'C');
            $meal = explode(',',$thursday);
            foreach ($meal  as $diet_meal){
                $pdf->Cell(0,10,"{$diet_meal}",1,1,'C');
            }
            $count = $count + 1;
        }
        $pdf->Cell(0,30,'Friday',1,1,'C');
        $count = 0;
        foreach ($this->createDiet(4) as $friday){
            $pdf->Cell(0,15,"{$meal_times[$count]}",1,1,'C');
            $meal = explode(',',$friday);
            foreach ($meal  as $diet_meal){
                $pdf->Cell(0,10,"{$diet_meal}",1,1,'C');
            }
            $count = $count + 1;
        }
        $pdf->Cell(0,30,'Saturday',1,1,'C');
        $count = 0;
        foreach ($this->createDiet(5) as $saturday){
            $pdf->Cell(0,15,"{$meal_times[$count]}",1,1,'C');
            $meal = explode(',',$saturday);
            foreach ($meal  as $diet_meal){
                $pdf->Cell(0,10,"{$diet_meal}",1,1,'C');
            }
            $count = $count + 1;
        }
        $pdf->Cell(0,30,'Sunday',1,1,'C');
        $count = 0;
        foreach ($this->createDiet(6) as $sunday){
            $pdf->Cell(0,15,"{$meal_times[$count]}",1,1,'C');
            $meal = explode(',',$sunday);
            foreach ($meal  as $diet_meal){
                $pdf->Cell(0,10,"{$diet_meal}",1,1,'C');
            }
            $count = $count + 1;
        }
        $pdf->Output('D','my_diet.pdf');
        exit;
    }
    public function actionTes(){
        $monda  = $this->createDiet(6);
        print_r($monda);
    }
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }


    public function crazyFoodArray($day){
        $result = array();
        $manager = new \MongoDB\Driver\Manager("mongodb://newext:0nmdcdnv7@34.253.125.110:27017/admin");
        $query = new \MongoDB\Driver\Query(array('user_id' =>  Yii::$app->user->identity->id, 'day' => $day));
        $cursor = $manager->executeQuery('admin.user_diet', $query);
        $my_variable = $cursor->toArray();
        foreach ($my_variable as $my) {
            unset($my->_id);
        }
        $final_result = array();
        foreach ($my_variable as $my) {
            $result = array();
            foreach ($my->food_groups as $d){
                //print_r($d->foods[$d->crazyFoodValue]);
                array_push($result,$d->foods[$d->crazyFoodValue]);
            }
            array_push($final_result,$result);
        }
        return $final_result;
    }

    public function createDiet($day){
        $result = array();
        $manager = new \MongoDB\Driver\Manager("mongodb://newext:0nmdcdnv7@34.253.125.110:27017/admin");
        $query = new \MongoDB\Driver\Query(array('user_id' =>  Yii::$app->user->identity->id, 'day' => $day));

        $cursor = $manager->executeQuery('admin.user_diet', $query);
        $my_variable = $cursor->toArray();
        $count = 0 ;
        foreach ($my_variable as $my) {
            unset($my->_id);
        }
        foreach ($my_variable as $my) {
            $my->foods = array_merge($my->foods,$this->crazyFoodArray($day)[$count]);
            $count = $count +1 ;
            $result_string = " ";
            foreach($my->foods as $food){
                $string = $food->name . ": "  .$food->amount . ", ";
                $result_string = $result_string.$string;
            }
            $result_string = rtrim($result_string,", ");
            array_push($result,$result_string);
        }
        return $result;
    }

    public function actionTry(){
        $meal_times = array("Colazione","Spuntino","Pranzo","Spuntino","Cena");
        $pdf = new \mPDF();
        $fer = "hi";
        $css = '';
        $html = '<head></head> <body>';
        $count = 0;
        $html .= '<h1>Monday</h1>';
        foreach ($this->createDiet(0) as $monday){
            $html .= '<h1>'.$meal_times[$count].'</h1>';
            $meal = explode(',',$monday);
            print_r($meal);
            foreach ($meal  as $diet_meal){
                $html .= '<h5>'.$diet_meal.'</h5>';
            }
            $count = $count + 1;
        }
        $count = 0;
        $html .= '<h1>Tuesday</h1>';
        foreach ($this->createDiet(1) as $tuesday){
            $html .= '<h1>'.$meal_times[$count].'</h1>';
            $meal = explode(',',$tuesday);
            print_r($meal);
            foreach ($meal  as $diet_meal){
                $html .= '<h5>'.$diet_meal.'</h5>';
            }
            $count = $count + 1;
        }
        $count = 0;
        $html .= '<h1>Wednesday</h1>';
        foreach ($this->createDiet(2) as $wednesday){
            $html .= '<h1>'.$meal_times[$count].'</h1>';
            $meal = explode(',',$wednesday);
            print_r($meal);
            foreach ($meal  as $diet_meal){
                $html .= '<h5>'.$diet_meal.'</h5>';
            }
            $count = $count + 1;
        }
        $count = 0;
        $html .= '<h1>Thursday</h1>';
        foreach ($this->createDiet(3) as $thursday){
            $html .= '<h1>'.$meal_times[$count].'</h1>';
            $meal = explode(',',$thursday);
            print_r($meal);
            foreach ($meal  as $diet_meal){
                $html .= '<h5>'.$diet_meal.'</h5>';
            }
            $count = $count + 1;
        }
        $count = 0;
        $html .= '<h1>Friday</h1>';
        foreach ($this->createDiet(4) as $friday){
            $html .= '<h1>'.$meal_times[$count].'</h1>';
            $meal = explode(',',$friday);
            print_r($meal);
            foreach ($meal  as $diet_meal){
                $html .= '<h5>'.$diet_meal.'</h5>';
            }
            $count = $count + 1;
        }
        $count = 0;
        $html .= '<h1>Saturday</h1>';
        foreach ($this->createDiet(5) as $saturday){
            $html .= '<h1>'.$meal_times[$count].'</h1>';
            $meal = explode(',',$saturday);
            print_r($meal);
            foreach ($meal  as $diet_meal){
                $html .= '<h5>'.$diet_meal.'</h5>';
            }
            $count = $count + 1;
        }
        $html .= '<br>';
        $html .= '<br>';
        $html .= '<br>';
        $html .= '<br>';
        $count = 0;
        $html .= '<h1>Sunday</h1>';
        foreach ($this->createDiet(6) as $sunday){
            $html .= '<h1>'.$meal_times[$count].'</h1>';
            $meal = explode(',',$sunday);
            print_r($meal);
            foreach ($meal  as $diet_meal){
                $html .= '<h5>'.$diet_meal.'</h5>';
            }
            $count = $count + 1;
        }
        $html .= '</body>';
        $pdf->debug = true;
        $pdf->SetFont('Arial','',12);
        $pdf->AddPage();
        $pdf->WriteHTML($css,1);
        $pdf->writeHtml($html);
        try {
            ob_clean();
            $pdf->Output('my_diet.pdf','D');
            exit;
        } catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception name used for catch
            // Process the exception, log, print etc.
            echo $e->getMessage();
        }
    }
    public function actionPrinter(){

        $pdf = new \mPDF();
        $fer = "hi";
        //$css = '';
        $html = '
                 <html>
                     <head>
                         <style>
                             #customers {
                                 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                                 border-collapse: collapse;
                                 width: 100%;
                             }
                             
                             #customers td, #customers th {
                                 border: 1px solid #ddd;
                                 padding: 8px;
                             }
                             
                             #customers tr:nth-child(even){background-color: #f2f2f2;}
                             
                             #customers tr:hover {background-color: #ddd;}
                             
                             #customers th {
                                 padding: 10px 20px;
                                 text-align: center;
                                 background-color: #4CAF50;
                                 color: white;
                             }
                             #customers tr td {
                                 vertical-align: top;
                             }
                             #customers tr td p span {
                                color: #ff2635;
                             }
                         </style>
                     </head>
                 <body>
                 
                    <table id="customers" >
                        <tr>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                       
                ';





        $first_meal =  array_map(null, $this->createDiet(0),$this->createDiet(1) , $this->createDiet(2),$this->createDiet(3),$this->createDiet(4),$this->createDiet(5),$this->createDiet(6));

        foreach ($first_meal as $diet) {
            $html .= '<tr>';
            for($i = 0; $i < 7; $i++) {
                $explosion = explode(',', $diet[$i]);
                //$explosion2 = explode(':', $explosion);
                //print_r($explosion);
                $html .= '<td>';
                foreach ($explosion as $ex){
                    //$html .= ''.$ex.'<br>';
                    $explo= explode(':', $ex);
                    $amount = '';

                    if($explo[1] > 5 ) {
                        $amount = $explo[1];

                    }
                    $html .= '<p>'.$explo[0]. '<span style="color: #ff3b4f;">' .$amount.'</span></p>';

                }
                $html .= '</td>';

            }
            $html .= '</tr>';
        }

        $html .= '</table></body>';


        //echo $html;



        $footer = '
                     <footer>
                         <table class="footer-table">
                             <tbody>
                                 <tr>
                                     <td>Paziente: '.Yii::$app->user->identity->first_name.', '.Yii::$app->user->identity->last_name.' <br>Allelica S.r.l. <a href="http://www.allelica.com">www.allelica.com</a></td>
                                     <!--<td>Via Giovanni Paisiello 55 CAP 00198 Roma</td>-->
                                     <td>PI 14528351001</td>
                                 </tr>
                             </tbody>
                         </table>
                     </footer>
                 ';
        $pdf->SetHTMLFooter($footer);
        $pdf->SetFont('Arial','',12);
        $pdf->AddPage('L');
        //$pdf->WriteHTML($css,1);
        $pdf->writeHtml($html);

        $pdf->Output('my_diet.pdf','I');
        exit;
    }

    public function actionInfo(){
        $info = PanelText::getInfo();
        //print_r($report);
        //echo(Yii::$app->user->identity->id);

        return $this->render('info',[
            'info' => $info,
        ]);
    }


}


