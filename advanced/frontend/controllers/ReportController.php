<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 14.03.18
 * Time: 13:19
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\User;
use frontend\models\PanelText;
use frontend\models\Panel;
use frontend\models\Biometrics;
use frontend\models\MoreBiometrics;

require_once ("../components/mpdf/mpdf.php");


class ReportController extends Controller{

    public function actionDownload(){
        $pdf = new \mPDF();
        //$pdf = new \mPDF(['debug' => true]);

        //$pdf->showImageErrors = true;
        $report = PanelText::getReport();

        $html  = '<body>

<style>
        <style>
    body { font-family: Arial,serif; font-size: 11pt; font-weight: 100;  }
    .short-description-panels {
        width: 100%;
        border-top: 1px solid cornflowerblue;
        border-collapse: collapse;
    }
    .short-description-panels tr, th {
        border-top: 1px solid cornflowerblue;
        padding: 5px 10px;
    }
    .short-description-panels thead tr th:nth-child(1), tr th:nth-child(2)  {
            font-family: Arial,serif;
            font-size: 18px;           
            font-weight: 300;
            font-style: normal;
            text-decoration: none;
            text-align: left;
    }
    .short-description-panels thead  tr th:nth-child(2)  {
        text-align: left;
    }
    .high {color: rgb(192,58,42);}
    .normal {color: rgb(53,124,162);}
    .low {color: rgb(20,162,19);}
    .footer-table {
        border-top: 1px solid cornflowerblue; 
        width: 100%;
        margin-bottom: 0px;
    }
    .footer-table tr td {
        text-align: center;
        font-family: Arial,serif;
        font-size: 15px;
        color: rgb(95,95,95);
        font-weight: normal;
        font-style: normal;
        text-decoration: none;
    }
    .panel-result {
        width: 100%;
    }
    .themeBox {
        position: relative;
    -ms-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
    max-height: 310px;
    min-height: 0;
    margin: 10px 0 25px;
    border: 5px solid rgba(0,0,0,.2);
    line-height: 0;
    font-size: 0;
    border-radius: 5px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    }
    
    
    .panels-result, .panel-result tr, .panel-result tr td {
        width: 100%;
        border-bottom: 1px solid #53e9ff;
        border-collapse: collapse;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    .panels-result tr:nth-child(1) td  {
            font-family: Arial,serif;
            font-size: 21px;           
            font-weight: 300;
            font-style: normal;
            text-decoration: none;
            text-align: center;
            color: rgb(53,124,162);
            margin-bottom: 15px;
    }
    .panels-result tr:nth-child(9) td  {
            font-family: Arial,serif;
            font-size: 17px;
            color: rgb(95,95,95);
            font-style: normal;
            text-decoration: none;
            margin-bottom: 15px;
    }
    .panels-result tr:nth-child(3) td  {
            font-family: Arial,serif;
            font-size: 17px;
            color: rgb(95,95,95);
            font-style: normal;
    }
    .panels-result .arrows td {
        text-align: center;
    }                                        
    .non-visible{
        visibility: hidden;
    }
    .visible {
        visibility: initial;
        //border-left: 1px solid #53e9ff;
        //border-right: 1px solid #53e9ff;
    }                                  


    .low{
       color: #286090;
    }
    .high{
       color: rgb(192,58,42);
    }
    .normal{
       color: #286090;
    }
</style>

<h1 style="border-bottom: 2px solid #00b8ff;padding-bottom: 15px;">
    <img src="http://my.allelica.com/allelica/images/logo.jpg" style="width: 300px;">
</h1>';
        $html .= '<h2 style="font-weight: 100;">Paziente: '. Yii::$app->user->identity->first_name . " " . Yii::$app->user->identity->last_name. '</h2> <table class="short-description-panels"> <thead>';
        $count = 0;
        $carbIns = false;
        foreach ($report as $rep) {
            $html .= "<div>hi</div>";
            if($rep['text'] != "Fruttosio") {
                if( stristr($rep['text'],'carb') ) {
                    if( !$carbIns  ) {
                        if($rep['class'] == 'high' || $count == 2) {
                            $carbIns = true;
                            $html .= '<tr>';
                            $html .= '<th class="'.$rep['class'].'">Sensibilità ai carboidrati</th>';
                            $html .= '<th class ="'.$rep['class'].'">' . $rep['special_text'] . '</th>';
                            $html .= '</tr>';
                        }
                    $count++;
                    }
                }else{
                    $html .= '<tr>';
                    $html .= '<th class="'.$rep['class'].'">' . $rep['text'] . '</th> ';
                    $html .= '<th class ="'.$rep['class'].'">' . $rep['special_text'] . '</th>';
                    $html .= '</tr>';
                }
            }
        }
        $html .= '</thead></table>';
        $html .= '</thead></table>';

        $html .= '<pagebreak>';
        $html .= '<table class="panels-result panel-gradient-1">';
        $count = 0;
        $pagecounter = 0;
        $carbIns = false;
        foreach ($report as $rep) {
            if($rep['text'] != "Fruttosio") {
                if($pagecounter % 2 ==0 and $pagecounter>2){
                    $html .= '<pagebreak>';
                }
                if( stristr($rep['text'],'carb') ) {
                    if( !$carbIns  ) {
                        if($rep['class'] == 'high' || $count == 2) {
                            $carbIns = true;
                            $html .= '<tr ><td colspan = "3" >';
                            //$html .= '<th class="'.$rep['class'].'">Sensibilità ai carboidrati</th>';
                            $html .= 'Sensibilità ai carboidrati';
                            $html .= '</td ></tr ><tr ><td colspan = "3" ><br><br><br></td ></tr ><tr ><td colspan = "3" >';
                            $html .= $rep['subheader_text'];
			    $html .= '</td></tr>';
                            if ($rep['class'] == 'low') {
                                $html .= '<tr class="arrows">
                                                    <td class="visible">
                                                        <img class="visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"><img style="width: 100%;" src="http://my.allelica.com/allelica/images/gradient.png"></td>
                                                </tr>';
                         } elseif ($rep['class'] == 'high') {
                                $html .= '<tr class="arrows">
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>
                                                    <td class="visible">
                                                        <img class="visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"><img style="width: 100%;" src="http://my.allelica.com/allelica/images/gradient.png"></td>
                                              </tr>';
                           } elseif($rep['class'] == 'normal') {
                                $html .= '<tr class="arrows">
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>
                                                    <td class="visible">
                                                        <img class="visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td> 
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td> 
                                                </tr>
                                                <tr>
                                                    <td colspan="3"><img style="width: 100%;" src="http://my.allelica.com/allelica/images/gradient.png"></td>
                                                </tr>';
                           }

                            $html .= '<br><br>';
                            $html .=           '<tr><td colspan="3"></td></tr>
                                                <tr><td colspan="3"></td></tr>
                                                <tr><td colspan="3"></td></tr>
                                                <tr>
                                                    <td colspan="3">';
                            $html .= $rep['more'];
                            $html .= ' </td></tr>
                                                    <tr><td colspan="3"></td></tr>
                                                    <tr><td colspan="3"></td></tr>
                                                    <tr><td colspan="3"></td></tr>
                                                </table>
                                                <br><br><br>';
                        }
                        $count++;
                    }
                }else{
                    $html .= '<table class="panels-result panel-gradient-1" ><tr ><td colspan = "3" >';
                    $html .= $rep['text'] ;
                    $html .= '</td ></tr ><tr ><td colspan = "3" ><br><br><br></td ></tr ><tr ><td class="subheader" colspan = "3" > ';
                    $html .= $rep['subheader_text'];
                    if ($rep['class'] == 'low') {
                        $html .= '</td></tr>  <tr class="arrows">
                                                    <td class="visible">
                                                        <img class="visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>    
                                                </tr>
                                                <tr>
                                                    <td colspan="3"><img style="width: 100%;" src="http://my.allelica.com/allelica/images/gradient.png"></td>
                                                </tr>';

                    } elseif ($rep['class'] == 'high') {
                        $html .= '</td></tr>  <tr class="arrows">
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td> 
                                                    <td class="visible">
                                                        <img class="visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>    
                                                </tr>
                                                <tr>
                                                    <td colspan="3"><img style="width: 100%;" src="http://my.allelica.com/allelica/images/gradient.png"></td>
                                                </tr>';

                    } elseif($rep['class'] == 'normal') {
                        $html .= '</td></tr>  <tr class="arrows">
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>
                                                    <td class="visible">
                                                        <img class="visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td> 
                                                    <td class="non-visible">
                                                        <img class="non-visible" width="60" src="http://icdn.pro/images/es/f/l/flecha-azul-hacia-abajo-icono-8990-128.png" />
                                                    </td>    
                                                </tr>
                                                <tr>
                                                    <td colspan="3"><img style="width: 100%;" src="http://my.allelica.com/allelica/images/gradient.png"></td>
                                                </tr>';



                    }
                    $html .=           '<tr><td colspan="3"></td></tr>
                                                <tr><td colspan="3"></td></tr>
                                                <tr><td colspan="3"></td></tr>
                                                <tr>
                                                    <td colspan="3">';
                    $html .= '<br><br>';
                    //$html .= $rep['more'];
                    $html .= str_replace("<br>", "", $rep['more']);
                    $html .= ' </td></tr>
                                                    <tr><td colspan="3"></td></tr>
                                                    <tr><td colspan="3"></td></tr>
                                                    <tr><td colspan="3"></td></tr>
                                                </table>
                                                <br>';

                }

                $pagecounter = $pagecounter + 1;
            }
        }



        $html .= '</body>';
        $footer = '
                    <footer>
                        <table class="footer-table">
                            <tbody>
                                <tr>
                                    <td>Paziente: '. Yii::$app->user->identity->first_name . " " . Yii::$app->user->identity->last_name. '<br>Allelica S.r.l. <a href="http://www.allelica.com">www.allelica.com</a></td>
                                    <td>Via Giovanni Paisiello 55 CAP 00198 Roma</td>
                                    <td>PI 14528351001</td>
                                </tr>
                            </tbody>
                        </table>
                    </footer>
                ';
        $pdf->SetHTMLFooter($footer);
        $pdf->SetFont('Arial','',12);
        $pdf->AddPage();
        $pdf->writeHtml($html);

        ob_clean();
        $pdf->Output('Report_' . Yii::$app->user->identity->last_name . '.pdf','I');
        exit;
    }

}
