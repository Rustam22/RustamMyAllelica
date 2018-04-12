<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 24.01.18
 * Time: 13:07
 */

$this->title = 'Home';


use yii\helpers\Url;
use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\Biometrics;


?>


<?php if($status == "biometrics"){?>


    <style>
        body
        {
            font-family:sans-serif;
        }
    </style>

    <script>
        $(function()
        {
            $('.slider').on('input change', function(){
                $(this).next($('.slider_label')).html(this.value);
            });
            $('.slider_label').each(function(){
                var value = $(this).prev().attr('value');
                $(this).html(value);
            });
        })
    </script>


    <?php $form = ActiveForm::begin(['options' => ['id' => 'Biometrics', 'enctype' => 'multipart/form-data']]) ?>

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add your biometrics</h3>
            </div>
            <div class="panel-body">
                <div class="form-group"> <!-- Radio group !-->
                    <label class="control-label">Sex?</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="Biometrics[sex]" value="m">
                            Male
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio"  name="Biometrics[sex]" value="f">
                            Female
                        </label>
                    </div>

                    <div class="form-group">

                        <p><label for="range_weight">Age: </label> <input type="range" name="Biometrics[age]" class="slider" min="0" max="100" value="0">
                            <span  class="slider_label"></span></p>
                    </div>

                    <div class="form-group"> <!-- Radio group !-->
                        <p><label for="range_weight">Height: </label> <input type="range" name="Biometrics[height]" class="slider" min="0" max="100" value="0">
                            <span  class="slider_label"></span></p>
                    </div>

                    <div class="form-group"> <!-- Radio group !-->
                        <p><label for="range_weight">Weight: </label> <input type="range" name="Biometrics[weight]"  class="slider" min="0" max="100" value="0">
                            <span  class="slider_label"></span></p>
                    </div>

                    <div class="form-group"> <!-- Radio group !-->
                        <label class="control-label">Target?</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="Biometrics[target]" value="Forte perdita di peso">
                                Forte perdita di peso
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[target]" value="Leggera perdita di peso">
                                Leggera perdita di peso
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[target]" value="Ricerca del mantenimento del benessere personale">
                                Ricerca del mantenimento del benessere personale
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[target]" value="Leggera crescita di massa muscolare">
                                Leggera crescita di massa muscolare
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[target]" value="Forte crescita di massa muscolare">
                                Forte crescita di massa muscolare
                            </label>
                        </div>
                    </div>

                    <div class="form-group"> <!-- Radio group !-->
                        <label class="control-label">Lifestyle?</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="Biometrics[lifestye]" value="Sedentario">
                                Sedentario
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[lifestye]" value="Poco Attivo">
                                Poco Attivo
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[lifestye]" value="Attivita nella media">
                                Attivita nella media
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[lifestye]" value="Molto attivo">
                                Molto attivo
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[lifestye]" value="Sportivo">
                                Sportivo
                            </label>
                        </div>
                    </div>

                    <div class="form-group"> <!-- Radio group !-->
                        <label class="control-label">Lifestyle?</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="Biometrics[type]" value="Onnivora">
                                Onnivora
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[type]" value="Vegetariana">
                                Vegetariana
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[type]" value="Vegana">
                                Vegana
                            </label>
                        </div>
                    </div>

                    <div class="form-group"> <!-- Radio group !-->
                        <label class="control-label">lactose_intolerance?</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="Biometrics[lactose_intolerance]" value="Si">
                                Si
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[lactose_intolerance]" value="No">
                                No
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[lactose_intolerance]" value="Non sono sicuro">
                                Non sono sicuro
                            </label>
                        </div>
                    </div>

                    <div class="form-group"> <!-- Radio group !-->
                        <label class="control-label">gluten_celiac_intolerance?</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="Biometrics[gluten_celiac_intolerance]" value="Si">
                                Si
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[gluten_celiac_intolerance]" value="No">
                                No
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[gluten_celiac_intolerance]" value="Non sono sicuro">
                                Non sono sicuro
                            </label>
                        </div>
                    </div>

                    <div class="form-group"> <!-- Radio group !-->
                        <label class="control-label">other?</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="Biometrics[other]" value="Si">
                                Si
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  name="Biometrics[other]" value="No">
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="comment">Other:</label>
                        <textarea class="form-control" rows="6" name="Biometrics[other_information]"></textarea>
                    </div>


                    <?= Html::submitButton('Save', ['class' => 'btn btn-lg btn-success btn-block'])?>
                </div>
            </div>
        </div>
    </div>





    <?php ActiveForm::end() ?>


<?php } ?>







<?php if($status == "panel") {
    $this->params['breadcrumbs'][] = 'Results';
    ?>

    <?php  ?>

    <div class="for-results">

        <link href="<?php echo Yii::$app->homeUrl; ?>allelica/css/results.css" rel="stylesheet">
        <style>
            .dropdown {
                display: none !important;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                localStorage.removeItem("currPanel");
                $('.card-heading').click(function (e) {
                    var panel = $(this).attr('data-original');
                    localStorage.setItem('currPanel', panel);
                });
            })
        </script>


        <div class="container">

            <div class="row">
                <div class="jumbotron">
                    <h1 class="blue" style="color:rgba(27,168,183,.9) !important;text-align: center;font-size: 25px;padding: 0px 16px;font-weight: 500;line-height: 42px;">
                        Tutti i pannelli relativi alla <?php echo $product . "(" . $user_detail[0]['first_name'] . " ". $user_detail[0]['last_name'] . ")";?>
                    </h1>
                </div>
            </div>

            <!--small cards-->
            <div class="row" style="background-color: #eaeaea;border-radius: 5px;margin-top: 35px;padding-bottom: 55px;">
                <?php foreach ($result as $key => $value) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-content">

                                <div class="card-header-blue">
                                    <h1 class="card-heading" data-original="<?php echo $value['original_key'];?>">
                                        <a href="<?php echo Yii::$app->homeUrl; ?>super/panel_text?panel=<?php echo $value['original_key'];?>&product=<?php echo $product;?>&user_id=<?php echo $user_id;?>">
                                            <?php echo $key; ?>
                                        </a>
                                    </h1>
                                </div>

                                <div class="card-body">
                                    <p class="card-p <?php echo $value['class']; ?>">
                                        <?php echo $value['special_text']; ?>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

    </div>
<?php } ?>








<?php if($status == "result") {$this->params['breadcrumbs'][] = ['label' => 'Results', 'url' => ['index']]; ?>

    <?php if($validUserId) { ?>
        <script src="https://code.highcharts.com/highcharts.src.js"></script>
        <script src="https://code.highcharts.com/highcharts-more.js"></script>
        <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
        <link href="<?php echo Yii::$app->homeUrl; ?>allelica/css/font-awesome.min.css" rel="stylesheet">
        <style>
            .dropdown {
                display: none !important;
            }
            .sixShow {
                margin: auto;
            }
            .sixShow td {
                width: 60px;
                height: 40px;
                background-color: green;
                color: #fff;
                font-size: 35px;
                margin-right: 1px;
                display: inline-block;
                padding-top: 12px;
                padding-left: 15px;
            }
            .sixShow td:nth-child(1) {
                background-color: #008000;
            }
            .sixShow td:nth-child(2) {
                background-color: #00A000;
            }
            .sixShow td:nth-child(3) {
                background-color: #00C200;
            }
            .sixShow td:nth-child(4) {
                background-color: #FFE118;
            }
            .sixShow td:nth-child(5) {
                background-color: #FFBF18;
            }
            .sixShow td:nth-child(6) {
                background-color: #FF8100;
            }
            .sixShow td:nth-child(7) {
                background-color: red;
            }
            .TL {
                text-align: center;
                width: 100%;
            }
            .TL div {
                display: inline-block;
                margin-right: 15px;
                width: 130px;
                height: 130px;
                border-radius: 50%;
                opacity: 0.15;
                border: 1px #eee solid;
            }
            @media only screen and (max-width: 800px) {
                .sixShow td {
                    display: block;
                }
                #container {
                    min-width: auto;
                }
            }
            @media only screen and (min-width: 801px) {
                #container {
                    min-width: 310px;
                }
            }

            @media only screen and (max-width: 800px) {
                .TL div {
                    display: block;
                }
            }
            .TL div:nth-child(1) {
                background-color: green;
            }
            .TL div:nth-child(2) {
                background-color: orange;
            }
            .TL div:nth-child(3) {
                background-color: red;
            }
            #underTLContainer {
                width: 100%;
                text-align: center;
            }
            #underTLContainer div {
                display: inline-block;
                margin-right: 15px;
                width: 130px;
                font-width: 18px;
                vertical-align: top;
            }
            @media only screen and (max-width: 800px) {
                #underTLContainer div {
                    display: block;
                    position: absolute;
                    left: 50%
                }
                #underTLContainer div:nth-child(1) {
                    margin-top: -350px;
                }
                #underTLContainer div:nth-child(2) {
                    margin-top: -220px;
                }
                #underTLContainer div:nth-child(3) {
                    margin-top: -100px;
                }
            }

        </style>


        <script>

            var buildTable = function () {
                var table = '<div class="headers-for-subheaders">Il tuo livello</div><table class="sixShow"><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table>';
                $('#container').html(table);
                $('#container').css('height','auto');
                scoreToShow = userScore + 1;
                $('.sixShow td:nth-child('+scoreToShow+')').html('<span id="yourScoreInTable" style="display:none;">&#9899;</span>');
                setTimeout(function () { $('#yourScoreInTable').fadeIn('slow') }, 500);
                setTimeout(function () { $('#labelOutside').detach() }, 500);
            }
            var buildTL = function () {
                $('#labelOutside').detach();
                $('#container').css('height','auto');
                if(localStorage.getItem('currPanel').indexOf('celia') >= 0) {
                    var TL = '<div class="headers-for-subheaders">Predisposizione</div><div class="TL"><div></div><div></div><div></div></div>';
                    $('#container').html(TL);
                    var underTL = '<div id="underTLContainer"><div id="underTL1">Assente</div><div id="underTL2">Bassa probabilità di presenza</div><div id="underTL2">Presente</div></div>';
                    $('.TL').after(underTL);
                    if (userScore < 1) {
                        scoreToShow = 1;
                    } else if (userScore < 3) {
                        scoreToShow = 2;
                    } else {
                        scoreToShow = 3;
                    }
                } else {
                    var TL = '<div class="headers-for-subheaders">Il tuo livello</div><div class="TL"><div></div><div></div><div></div></div>';
                    $('#container').html(TL);
                    var underTL = '<div id="underTLContainer"><div id="underTL1">Metabolizzatore veloce</div><div id="underTL2">Metabolizzatore intermedio</div><div id="underTL2">Metabolizzatore<br>lento</div></div>';
                    $('.TL').after(underTL);
                    scoreToShow = userScore + 1;
                }
                setTimeout(function () { $('.TL div:nth-child('+scoreToShow+')').fadeTo(800 , 15) }, 500);
                setTimeout(function () { $('#labelOutside').detach() }, 500);
                setTimeout(function () { $('#underTLContainer div:nth-child('+scoreToShow+')').css('font-weight','bold'); }, 500);
            }
            var doChartNoData = function () {
                $('#alto').hide();
                $('#basso').hide();
                $('#poche').hide();
                $('#molte').hide();

                if(localStorage.getItem('currPanel').indexOf('antinfiam') >= 0) {
                    return buildTable();
                }
                if(localStorage.getItem('currPanel').indexOf('caff') >= 0 || localStorage.getItem('currPanel').indexOf('celia') >= 0) {
                    return buildTL();
                }

                userScoreForNoData  = 0.25;
                if(userScore >= 1)
                    userScoreForNoData = 0.75;

                var gaugeOptions = {
                    chart: {
                        type: 'gauge',
                    },
                    title: null,
                    pane: {
                        center: ['50%', '85%'],
                        size: '100%',
                        startAngle: -90,
                        endAngle: 90,
                        background: {
                            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                            innerRadius: '60%',
                            outerRadius: '100%',
                            shape: 'arc'
                        }
                    },
                    tooltip: {
                        enabled: false
                    },
                    // the value axis
                    yAxis: {
                        lineWidth: 0,
                        minorTickInterval: null,
                        tickAmount: 2,
                        title: {
                            y: -70
                        },
                        labels: {
                            y: 16, enabled: false,
                        }
                    },
                    xAxis: {
                        labels: {
                            enabled: false,
                        }
                    }
                };

                var chartRpm = Highcharts.chart('container', Highcharts.merge(gaugeOptions, {
                    yAxis: {
                        min: 0,
                        max: 1,
                        plotBands: [
                            {
                                from: 0,
                                to: 0.5,
                                color: 'green',
                                outerRadius: '105%',
                                thickness: '50%',
                                label: {
                                    x: 20,
                                    y: 0,
                                    text:  'Non a rischio',
                                    textAlign: 'left',
                                    style: {
                                        color: 'green',
                                        fontSize: '24px',
                                        fontFamily: '"Josefin Sans", sans-serif',
                                        fontWeight: 600,
                                    }
                                }
                            },{
                                from: 0.5,
                                to: 1,
                                color: 'red',
                                outerRadius: '105%',
                                thickness: '50%',
                                label: {
                                    text: 'A rischio',
                                    x: 620,
                                    y: 60,
                                    style: {
                                        fontSize: '24px',
                                        fontFamily: '"Josefin Sans", sans-serif',
                                        color: 'red',
                                        fontWeight: 700,
                                    }
                                }
                            }],
                    },
                    series: [{
                        name: 'Presenza fenomeno',
                        data: [userScoreForNoData],
                    }],
                    credits: {
                        enabled: false,
                    }
                }))
            };

            function doChart() {
                $('#alto').show();
                $('#basso').show();
                $('#poche').show();
                $('#molte').show();
                var panelType = '';

                function percentile(arr, p) {
                    if (arr.length === 0) return 0;
                    if (typeof p !== 'number') throw new TypeError('p must be a number');
                    if (p <= 0) return arr[0];
                    if (p >= 1) return arr[arr.length - 1];

                    arr.sort(function (a, b) { return a - b; });
                    var index = (arr.length - 1) * p
                    lower = Math.floor(index),
                        upper = lower + 1,
                        weight = index % 1;

                    if (upper >= arr.length) return arr[lower];
                    return arr[lower] * (1 - weight) + arr[upper] * weight;
                }


                values =  chartData;
                /*values =  [0.87103327, 0.95121442, 1.03139556, 1.11157671, 1.19175786,
                    1.271939, 1.35212015, 1.43230129, 1.51248244, 1.59266359,
                    1.67284473, 1.75302588, 1.83320702, 1.91338817, 1.99356932,
                    2.07375046, 2.15393161, 2.23411275, 2.3142939, 2.39447505,
                    2.47465619, 2.55483734, 2.63501848, 2.71519963, 2.79538078,
                    2.87556192, 2.95574307, 3.03592421, 3.11610536, 3.19628651,
                    3.27646765, 3.3566488, 3.43682994, 3.51701109, 3.59719224,
                    3.67737338, 3.75755453, 3.83773567, 3.91791682, 3.99809797,
                    4.07827911, 4.15846026, 4.2386414, 4.31882255, 4.3990037,
                    4.47918484, 4.55936599, 4.63954713, 4.71972828, 4.79990943,
                    4.88009057, 4.96027172, 5.04045287, 5.12063401, 5.20081516,
                    5.2809963, 5.36117745, 5.4413586, 5.52153974, 5.60172089,
                    5.68190203, 5.76208318, 5.84226433, 5.92244547, 6.00262662,
                    6.08280776, 6.16298891, 6.24317006, 6.3233512, 6.40353235,
                    6.48371349, 6.56389464, 6.64407579, 6.72425693, 6.80443808,
                    6.88461922, 6.96480037, 7.04498152, 7.12516266, 7.20534381,
                    7.28552495, 7.3657061, 7.44588725, 7.52606839, 7.60624954,
                    7.68643068, 7.76661183, 7.84679298, 7.92697412, 8.00715527,
                    8.08733641, 8.16751756, 8.24769871, 8.32787985, 8.408061,
                    8.48824214, 8.56842329, 8.64860444, 8.72878558, 8.80896673];*/
                frequencies = chartFrequency;
                /*frequencies = [3.80111894e-05, 9.30396904e-05, 2.08976617e-04, 4.31382147e-04,
                    8.19910089e-04, 1.43816334e-03, 2.33496702e-03, 3.52345081e-03,
                    4.97184247e-03, 6.62322548e-03, 8.45575601e-03, 1.05788121e-02,
                    1.33397003e-02, 1.74014451e-02, 2.37565569e-02, 3.36657069e-02,
                    4.85376828e-02, 6.97736134e-02, 9.85778712e-02, 1.35719477e-01,
                    1.81254839e-01, 2.34299157e-01, 2.92992898e-01, 3.54760536e-01,
                    4.16787584e-01, 4.76465338e-01, 5.31538485e-01, 5.79897367e-01,
                    6.19245537e-01, 6.47004861e-01, 6.60665247e-01, 6.58454067e-01,
                    6.39955094e-01, 6.06337136e-01, 5.60113256e-01, 5.04620174e-01,
                    4.43491871e-01, 3.80291652e-01, 3.18301904e-01, 2.60385684e-01,
                    2.08854514e-01, 1.65339970e-01, 1.30707334e-01, 1.05048196e-01,
                    8.77613116e-02, 7.77016479e-02, 7.33656466e-02, 7.30924900e-02,
                    7.52805822e-02, 7.86149074e-02, 8.22611273e-02, 8.59373621e-02,
                    8.97827756e-02, 9.40317224e-02, 9.86296612e-02, 1.02997867e-01,
                    1.06097732e-01, 1.06780760e-01, 1.04241373e-01, 9.83312559e-02,
                    8.95843843e-02, 7.89745564e-02, 6.75643403e-02, 5.62264738e-02,
                    4.55351510e-02, 3.58102765e-02, 2.72277088e-02, 1.99090475e-02,
                    1.39516875e-02, 9.41056525e-03, 6.26683881e-03, 4.41142638e-03,
                    3.64950087e-03, 3.71709092e-03, 4.30272749e-03, 5.07802421e-03,
                    5.74504364e-03, 6.09685002e-03, 6.06907428e-03, 5.75258122e-03,
                    5.35120302e-03, 5.09683487e-03, 5.15743747e-03, 5.57601813e-03,
                    6.26067133e-03, 7.02116271e-03, 7.63142935e-03, 7.89500343e-03,
                    7.69637278e-03, 7.02784360e-03, 5.98630400e-03, 4.74061553e-03,
                    3.47994910e-03, 2.36179887e-03, 1.47862532e-03, 8.52263591e-04,
                    4.51522156e-04, 2.19574140e-04, 9.79015838e-05, 3.99851528e-05];*/

                val = [];
                for (var i in values) {
                    val.push(values[i] * frequencies[i])
                }


                pc = percentile(values, 50);






                /**************************  Rustam Part **************************/
                var dbPercentile = userScore;          // given percintile

                dbPercentile = 75;          // given percintile

                var dbGreenLine  = 9;           // given tuo valore(green line)


                var rQunatile = 0;              // must be inserted to the dsatabase(qunatile index)
                CDF = 0;
                var cdfArr = [];
                for(var ii in values) {
                    var mult = frequencies[ii];
                    CDF = CDF + mult;
                    cdfArr[ii] = CDF;
                    /*console.log('mult: ' + mult + ', CDF: ' + CDF);*/
                    /*if(CDF >= dbPercentile) {

                        CDF = (CDF*0.75);

                        rQunatile = ii;
                        break;
                    }*/
                }

                var CDF75 = (CDF*0.75);
                var CDF25 = (CDF*0.25);
                var indexFor75 = '';
                var indexFor25 = '';
                for(var kk in frequencies) {
                    if(cdfArr[kk] >= CDF25  && indexFor25 == '') {
                        indexFor25 = kk;
                        //break;
                    }
                    if(cdfArr[kk] >= CDF75) {
                        indexFor75 = kk;
                        break;
                    }
                }


                //console.log('userScore: ' + userScore);
                /*console.log('rQunatileIndexValue75: ' + values[indexFor75] + ', indexFor75: ' + indexFor75);
                console.log('rQunatileIndexValue25: ' + values[indexFor25] + ', indexFor25: ' + indexFor25);*/

                console.log(indexFor75 + ' - ' + values[indexFor75] + ' - ');


                var precurrentPanel = '';
                $('.user-experience .main-nav #nav-tabs-wrapper li a').click(function () {
                    localStorage.setItem('currPanel', $(this).attr('data-original'));
                    precurrentPanel = localStorage.getItem('currPanel');
                });
                var currentPanel = '';
                if(localStorage.getItem('currPanel')) {
                    currentPanel = localStorage.getItem('currPanel');
                } else {
                    currentPanel = precurrentPanel;
                }
                /*localStorage.removeItem('currPanel');*/


                var greenLine = userScore;              // must be inserted to the dsatabase(user green line)
                for(var jjj in values) {
                    if(values[jjj] >= greenLine) {
                        greenLine = jjj;
                        break;
                    }
                }

                //Rise frequencies up to 100
                for(var tt in frequencies) {
                    frequencies[tt] = frequencies[tt];
                }
                /**************************  Rustam Part End **************************/


                plotLineId = 'myPlotLine'; // To identify for removal
                plotLineOptions = {
                    color: 'green', // Color value
                    dashStyle: 'line', // Style of the plot line. Default to solid
                    value: greenLine, // Value of where the line will appear
                    width: 3, // Width of the line
                    id: plotLineId,
                    zIndex: 5,
                    label: {
                        text: userName,
                        verticalAlign: 'middle',
                        textAlign: 'right',
                        y: 60,
                        style: {
                            color: 'green',
                            fontSize: '14px',
                            fontWeight: 'bold',
                            zIndex: 8
                        }
                    }
                };


                var textPanel = 'Alta sensibilità';
                if(currentPanel.indexOf('carb') >= 0  || currentPanel.indexOf('grassi') >= 0)  {
                    textPanel = 'Alta sensibilità';
                } else {
                    textPanel = 'Rischio più elevato';
                }

                plotAreaId = 'myPlotArea'; // To identify for removal
                var plotBandsOptionsX = [];
                plotBandsOptions75 = {
                    from: indexFor75,
                    to: 100,
                    color: 'rgba(200, 50, 50, .2)',
                    verticalAlign: 'top',
                    label: {
                        text: textPanel,
                        align: 'right',
                        style: {
                            color: 'red',
                            fontSize: '15px',
                            fontWeight: 'bold',
                        }
                    },
                };
                plotBandsOptions25 = {
                    from: 0,
                    to: indexFor25,
                    color: 'rgba(92, 239, 66, 0.2)',
                    verticalAlign: 'top',
                    label: {
                        text: 'Bassa sensibilità',
                        align: 'left',
                        style: {
                            color: 'green',
                            fontSize: '15px',
                            fontWeight: 'bold',
                        }
                    },
                };

                var indexForX = 0;
                if(currentPanel.indexOf('carb') >= 0 || currentPanel.indexOf('grassi') >= 0 )  {
                    indexForX = indexFor25;
                } else {
                    indexForX = indexFor75;
                    plotBandsOptions25 = [];
                }
                console.log(currentPanel);
                console.log(plotBandsOptionsX);
                console.log('indexFor25: ' + indexFor25 + ',  indexFor75: ' + indexFor75 + ',  indexForX: ' + indexForX)

                Highcharts.chart('container', {

                    chart: {
                        events: {
                            render: function () {
                                $('.highcharts-plot-bands-0').fadeIn(1000);
                            }
                        }
                    },

                    title: {
                        text: '',
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'left',
                        verticalAlign: 'top',
                        x: 10,
                        y: 40,
                        floating: true,
                        borderWidth: 1,
                        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
                        itemStyle: {
                            fontSize: '15px',
                            fontFamily: '"Josefin Sans", sans-serif',
                            color: '#3b4045'
                        },
                    },

                    xAxis: {
                        categories: values,
                        title: {
                            text:  'Rischio genetico',
                            style: {
                                margin:'50px',
                                fontSize: '18px',
                                fontFamily: '"Josefin Sans", sans-serif',
                                color: '#3b4045',
                                fontWeight: '700'
                            },
                            y: 7
                        },
                        labels: {
                            rotation: 0.1,
                            align: 'left',
                            step: 10,
                            enabled: false
                        },
                        plotBands: [
                            plotBandsOptions75,
                            plotBandsOptions25,
                        ],
                        plotLines: [
                            plotLineOptions
                        ],
                        duration: 2100

                    },

                    yAxis: {
                        title: {
                            text: 'Numero di persone',
                            style: {
                                fontSize: '18px',
                                fontFamily: '"Josefin Sans", sans-serif',
                                fontWeight: '700',
                                color: '#3b4045'
                            }
                        },
                        labels: {
                            enabled: false,/*
                        formatter: function() {
                            return this.value+"%";
                        }*/
                        },
                    },


                    tooltip: {
                        //shared: false,
                        // valueSuffix: ' units',
                        enabled: false,
                        //pointFormat: "Popolazione europea: {point.y:.2f} units",
                        /* formatter: function () {
                             score = this.x;
                             frequence = this.y;
                             //return 'Il ' + frequence.toFixed(2) + '% degli Europei ha uno score di:' + score.toFixed(2);
                             return '';
                         }*/
                    },

                    credits: {
                        enabled: false
                    },

                    plotOptions: {
                        areaspline: {
                            fillOpacity: 0.5
                        },
                        series: {
                            events: {
                                afterAnimate: function () {
                                    $('.highcharts-plot-lines-0').fadeIn(1500);
                                    $('.highcharts-plot-line-label').fadeIn(1500);
                                    $('.highcharts-plot-band-label').fadeIn(1500);
                                }
                            }
                        }
                    },

                    series: [{
                        name: 'Popolazione europea',
                        dashStyle: 'none',
                        allowPointSelect: false,
                        data: frequencies,
                    },
                        {
                            color: 'green',
                            name: 'Il tuo valore',
                            dashStyle: 'line',
                            marker: {
                                enabled: false
                            },
                            events: {
                                legendItemClick: function(e) {
                                    if(this.visible) {
                                        this.chart.xAxis[0].removePlotLine(plotLineId);
                                    }
                                    else {
                                        this.chart.xAxis[0].addPlotLine(plotLineOptions);
                                    }
                                }
                            }
                        },
                    ]
                });
            }

        </script>
        <script type="text/javascript">
            var chartData = '';
            var chartFrequency = '';
            var userScore = '';
            var userName = '';
            var firstLoad = false;
            var isGaussian = false;
            var dataSet = [];

            $(document).ready(function() {

                function doDataTable(dataSet) {
                    for(var i = 0; i < dataSet.length; i++) {
                        var comparableElem = dataSet[i][2];
                        if(comparableElem == dataSet[i][3]) {
                            dataSet[i][3] = '<span class="red-red">' + dataSet[i][3] + '</span>';
                        }
                        if(comparableElem == dataSet[i][4]) {
                            dataSet[i][4] = '<span class="red-red">' + dataSet[i][4] + '</span>';
                        }
                        if(comparableElem == dataSet[i][3] && comparableElem == dataSet[i][4]) {
                            dataSet[i][3] = '<span class="red-red">' + dataSet[i][3] + '</span>';
                            dataSet[i][4] = '<span class="red-red">' + dataSet[i][4] + '</span>';
                        }
                    }



                    var htmlTable = "<table><thead><tr><th width='20%'>SNP</th><th width='45%' style='text-align:center'>Variante con effetto</th><th colspan='2' style='text-align:center;'>Il tuo genotipo</th></tr></thead><tbody>";
                    already_shown = [];
                    for(row in dataSet) {
                        if(already_shown.indexOf(dataSet[row][1]) < 0) {
                            htmlTable += '<tr><td>'+dataSet[row][1]+'</td><td style="text-align:center;color: red;">'+dataSet[row][2]+'</td><td style="text-align:center;">'+ dataSet[row][3] + '</td><td style="text-align:center;">' + dataSet[row][4] + '</td></tr>';
                            already_shown.push(dataSet[row][1]);
                        }
                    }
                    htmlTable += '</tbody></table>';
                    $('#data-table-content').html(htmlTable);

                    /*$('#data-table-content').DataTable( {
                        destroy: true,
                        "scrollX": true,
                        responsive: true,
                        "initComplete": function(settings, json) {

                        },
                        data: dataSet,
                        /!*columns: [
                            { title: "Gene" },
                            { title: "Snp" },
                            { title: "Effective allele" },
                            { title: "Il tuo genotipo" },
                            { title: " " },
                        ]*!/
                    } );
                    $('.modal-body thead tr th:nth-child(4)').html('Il tuo genotipo');
                    $('.modal-body thead tr th:nth-child(3)').html('Variante con effetto');
                    // $('.modal-body thead tr th:nth-child(4)').html(userName);*/

                }

                try {
                    if(localStorage.getItem('currPanel')  == 'Sensibilità ai carboidrati') {
                        $('.user-experience .main-nav #nav-tabs-wrapper li:first a').click();
                    }
                    $('.user-experience .main-nav #nav-tabs-wrapper li a[data-original="' + localStorage.getItem("currPanel") + '"]').click();
                } catch(e) {
                    $('.user-experience .main-nav #nav-tabs-wrapper li:first a').click();
                }

                $(document).on('click','.fa-info-circle', function (e) {
                    $('button[data-target="#myModal"]').click();
                });

                $('.user-experience .main-nav #nav-tabs-wrapper li a').click(function () {
                    var menu = $(this).attr('data-original');
                    localStorage.setItem('currPanel', menu);

                    $.ajax({
                        url: 'panel_text',
                        type: 'GET',
                        dataType : 'json',
                        data: {panel:menu,product:'<?php echo $product;?>',user_id:'<?php echo $user_id;?>'},
                        async: false,
                        success: function(data) {

                            $('#description').html('');
                            $('#subHeader').html('');
                            console.log(data);
                            console.log('...');
                            var panel_data = JSON.parse(data.panel_data);
                            userScore = JSON.parse(data.score);
                            userName = data.first_name;

                            dataSet = data.joins;
                            doDataTable(dataSet);
                            $('.modal-body .sorting_desc').click();
                            $('.modal-body .sorting_asc').click();

                            chartData = panel_data.data;
                            chartFrequency = panel_data.frequency;

                            if(!chartData && !chartFrequency) {
                                var containerText = $('.user-experience .panel-body .contain').html(' ');
                                $('.user-experience .panel-body #container').css('display', 'block');
                                doChartNoData();
                                isGaussian = false;
                                $('.highcharts-data-label').detach();
                            } else {
                                $('.user-experience .panel-body #container').css('display', 'block');
                                doChart();
                                isGaussian = true;
                            }

                            if(!isGaussian) {
                            }
                            if(menu.indexOf('carb') >= 0)
                                menu = 'Sensibilità ai carboidrati';


                            localStorage.setItem('currPanel', menu);


                            if(localStorage.getItem('currPanel').indexOf('metabolica') >= 0 || localStorage.getItem('currPanel').indexOf('caffein') >= 0 || localStorage.getItem('currPanel').indexOf('antinfiammatorie') >= 0 || localStorage.getItem('currPanel').indexOf('cardio') >= 0 || localStorage.getItem('currPanel').indexOf('Vitamina D') >= 0) {
                                $('.read-more').css('display', 'none');
                            } else {
                                $('.read-more').css('display', 'block');
                            }


                            // alert(JSON.stringify(data.final_array[localStorage.getItem("currPanel")]));
                            subHeader = data.final_array[localStorage.getItem("currPanel")]['subheader_text'];
                            subHeader = subHeader.replace(/(?:\r\n|\r|\n)/g, '<br />');
                            $('#subHeader').html(subHeader);

                            more = data.final_array[localStorage.getItem("currPanel")]['more'];
                            more = more.replace(/(?:\r\n|\r|\n)/g, '<br />');
                            $('#advice').html(more);

                            console.log(isGaussian);
                            if(!isGaussian) {
                                lowertext  = data['allResults'][0];
                                highertext = data['allResults'][1];
                                $($('.highcharts-root text')[0]).html(lowertext);
                                $($('.highcharts-root text')[1]).html(highertext);
                                $('#labelOutside').detach();
                                $('#container').after('<div id="labelOutside"><span style="color:green">'+lowertext+'</span><br/><span style="color:red">'+highertext+'</span></div>');
                                $('.panel .panel-heading').html(localStorage.getItem("currPanel") + '<i class="fas fa-info-circle" style="display: none;"></i>');
                            } else if(isGaussian && !(document.cookie.indexOf("userOnce=") >= 0)) {
                                document.cookie = "userOnce=yes";
                                /*$('.fa-info-circle').css('display', 'block !important');*/
                                $('.panel .panel-heading').html(localStorage.getItem("currPanel") + '<i class="fas fa-info-circle" style="display: block;"></i>');
                                $('button[data-target="#myModal"]').click();
                            } else {
                                document.cookie = "userOnce=yes";
                                $('.panel .panel-heading').html(localStorage.getItem("currPanel") + '<i class="fas fa-info-circle" style="display: none;"></i>');
                            }
                            if(isGaussian) {
                                $('.panel .panel-heading').html(localStorage.getItem("currPanel") + '<i class="fas fa-info-circle" style="display: block;"></i>');
                            }

                            /*$('.panel .panel-heading').html(localStorage.getItem("currPanel"));*/
                            base_text = data.base_text.replace(/(?:\r\n|\r|\n)/g, '<br />');
                            $('#description').html(base_text);



                            if(!firstLoad) {
                                $('.sels').animate({
                                    scrollTop: $(".sels .active").offset().top/7
                                }, 1500);
                                $('.tsells').animate({
                                    scrollTop: $(".tsells .active").offset().top - 250
                                }, 1500);
                            }
                            firstLoad = true;
                        },

                    });
                });

                try {
                    if(localStorage.getItem('currPanel')  == 'Sensibilità ai carboidrati') {
                        $('.user-experience .main-nav #nav-tabs-wrapper li:first a').click();
                    }
                    $('.user-experience .main-nav #nav-tabs-wrapper li a[data-original="' + localStorage.getItem("currPanel") + '"]').click();
                } catch(e) {
                    $('.user-experience .main-nav #nav-tabs-wrapper li:first a').click();
                }


                $('.read-more').click(function () {
                    setTimeout(function(){
                        $('.dataTables_scrollHeadInner th:first').click();
                        $('.dataTables_scrollHeadInner th:first').click();
                    },500);
                });


                /*$(document).on('click','.paginate_button', function (e) {
                   /!* var tr = $('#data-table-content tbody tr');
                   //console.log(tr[0]);
                    for(var i = 0; i<=tr.length; i++) {
                        var td =

                    }*!/
                   var count = 0;
                    $('#data-table-content tbody tr').find('td').each (function() {
                        console.log($(this));
                        console.log($(this)[0].innerHTML);

                    });
                });*/

            })
            $(document).on('click','.info',function () {
                if(!$('#description').hasClass('shown')) {
                    $('#description').addClass('shown');
                    $('#description').slideDown(800);
                } else {
                    $('#description').slideUp(800);
                    $('#description').removeClass('shown');
                }
            });
            $(document).on('click','.advice',function () {
                if(!$('#advice').hasClass('shown')) {
                    $('#advice').addClass('shown');
                    $('#advice').slideDown(800);
                } else {
                    $('#advice').slideUp(800);
                    $('#advice').removeClass('shown');
                }
            });
        </script>
        <style type="text/css">
            .highcharts-plot-lines-0, .highcharts-plot-bands-0, .highcharts-plot-line-label , .highcharts-plot-band-label {}
            .highcharts-legend .highcharts-point{
                display: none;
            }
            .highcharts-tick {
                display: none;
            }
            .fa-info-circle {
                font-family: FontAwesome;
                float: right;
                font-size: 23px;
                cursor: pointer;
                display: none;
            }
            .user-experience #nav-tabs-wrapper li a{
                font-weight: 400;
                font-size: 18px;
                text-align: center;
            }
            .user-experience .nav-tabs-dropdown {
                display: none;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }

            .user-experience .nav-tabs-dropdown:before {
                content: "\e114";
                font-family: 'Glyphicons Halflings';
                position: absolute;
                right: 30px;
            }
            #advice {
                font-size: 20px;
                margin-bottom: 15px;
            }

            #labelOutside {
                display: none;
                font-size: 24px;
                margin-bottom: 20px;
            }
            @media screen and (max-width: 1205px) {
                .highcharts-plot-band-label  {
                    display: none;
                }
                #labelOutside {
                    display: block !important;
                }
            }
            .highcharts-markers path[stroke="#ffffff"] {
                display: none !important;
            }
            @media screen and (min-width: 769px) {
                #nav-tabs-wrapper {
                    display: block!important;
                }
            }
            @media screen and (max-width: 798px) {
                .user-experience .nav-tabs-dropdown {
                    display: none;
                }
                .user-experience #nav-tabs-wrapper {
                    /*display: none;*/
                    border-top-left-radius: 0;
                    border-top-right-radius: 0;
                    text-align: center;
                }
                .user-experience .nav-tabs-horizontal {
                    min-height: 20px;
                    padding: 19px;
                    margin-bottom: 20px;
                    background-color: #f5f5f5;
                    border: 1px solid #e3e3e3;
                    border-radius: 4px;
                    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                    box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                }
                .user-experience .nav-tabs-horizontal  > li {
                    float: none;
                }
                .user-experience  .nav-tabs-horizontal  > li + li {
                    margin-left: 2px;
                }
                .user-experience .nav-tabs-horizontal > li,
                .user-experience .nav-tabs-horizontal > li > a {
                    background: transparent;
                    width: 100%;
                }
                .user-experience .nav-tabs-horizontal  > li > a {
                    border-radius: 4px;
                }
            }
            .user-experience #nav-tabs-wrapper {
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.16), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
                font-family: 'Roboto', sans-serif;
                -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            .user-experience #nav-tabs-wrapper li {
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.16), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
                font-family: 'Roboto', sans-serif;
                -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                /*border: 1px solid #dedede;*/
                border-radius: 5px;
            }
            .user-experience #nav-tabs-wrapper li a{
                margin-right: 0px;
            }
            .user-experience #nav-tabs-wrapper li a:focus, .user-experience li a:hover, .user-experience li a:active, .user-experience .active a{
                background-color: rgba(27,168,183,.9) !important;
                color: white;
            }

            .user-experience .panel-heading {
                font-weight: 400;
                font-size: 18px;
            }
            .user-experience .panel-primary {
                border-color: rgba(27,168,183,.9) !important;
                margin-left: 15px;
            }
            .user-experience .panel-primary > .panel-heading {
                color: #fff;
                background-color: rgba(27,168,183,.9) !important;
                border-color: rgba(27,168,183,.9) !important;
            }
            .high {
                color: #ff4242 !important;
            }
            .low {
                color: #00abff !important;
            }


            .highcharts-plot-band-label {
                font-size: 16px !important;
            }
            /* width */
            .scrollbar-outer ::-webkit-scrollbar {
                width: 10px;
            }

            /* Track */
            .scrollbar-outer ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey;
                border-radius: 10px;
            }

            /* Handle */
            .scrollbar-outer ::-webkit-scrollbar-thumb {
                background: rgba(27,168,183,.9) !important;
                border-radius: 10px;
            }

            /* Handle on hover */
            .scrollbar-outer ::-webkit-scrollbar-thumb:hover {
                background: rgba(18, 145, 158, 0.9) !important;
            }

            .headers-for-subheaders {
                color: rgb(56, 176, 190) !important;
                text-align: center;
                font-size: 24px;
                padding: 0px 16px;
                font-weight: 500;
                line-height: 42px;
                margin-top: 20px;
                text-align: center;
            }
            #description {
                font-size: 16px !important;
            }
            @media screen and (max-width: 800px) {
                #advice, #description {
                    display: none;
                    margin-top: 15px;
                }
                .info,.advice {
                    background-color: rgb(56,176,190);
                    color: #fff !important;
                    border-radius: 5px;
                    border: 1px rgb(56,176,190) solid;
                    cursor: pointer;
                }
                .info:hover, .advice:hover {
                    color: rgb(56,176,190) !important;
                    background-color: #fff;
                }
                .user-experience .scrollbar-outer #nav-tabs-wrapper {
                    max-height: 335px !important;
                }
                .user-experience .col-sm-3 {
                    position: relative !important;
                    min-height: 1px !important;
                    padding-right: 15px !important;
                    padding-left: 15px !important;
                }
                .user-experience .col-sm-3 {
                    width: 100%;
                }
                .user-experience .col-sm-9 {
                    width: inherit !important;
                }
            }

            .non-mobile {
                display: block;
            }
            .for-mobile {
                display: none;
            }
            @media screen and (max-width: 800px) {
                .non-mobile {
                    display: none;
                }
                .for-mobile {
                    display: block;
                }
                .unmargin {
                    margin: 0 !important;
                }
            }
            .read-more {
                margin: auto;
                text-align: center;
                display: block;
                border-radius: 3px;
            }

            .modal-body tbody td {
                font-size: 17px;
                font-weight: 400;
                border-right: 1px solid #ddd;
            }
            .modal-body tbody tr td:nth-child(2) {
                border-right: 1px solid #333 !important;
            }
            .modal-body thead tr th:nth-child(2) {
                border-right: 1px solid #333 !important;
            }
            .modal-body thead th {
                font-size: 20px;
                text-align: left;
                border-bottom: 1px solid #333;
            }
            .modal-body tr {
                border-bottom: 1px solid #ddd;
            }


            .close  {
                float: right;
                font-size: 3.7rem;
                font-weight: 400;
                line-height: 1;
                color: #000;
                text-shadow: 0 1px 0 #fff;
                opacity: .4;
            }
            .orange-orange {
                background-color: orange;
                font-weight: 600;
                color: white;
            }
            .red-red {
                /*background-color: red;*/
                font-weight: 600;
                color: red;
            }
            .modal-description {
                font-size: 20px;
                font-weight: 400;
                margin-left: 10px;
            }
            select[name="data-table-content_length"], input[aria-controls="data-table-content"] {
                display: block;
                width: 100%;
                height: 34px;
                padding: 6px 12px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #555;
                background-color: #fff;
                background-image: none;
                border: 1px solid #ccc;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
                -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            }
        </style>

        <div class="container user-experience">
            <div class="row">

                <div class="non-mobile">
                    <div class="col-sm-3">
                        <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Tabs</a>

                        <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked  well" style="box-shadow: 0 1px 3px 0 rgba(255, 255, 255, 0.16), 0 1px 3px 0 rgba(0, 0, 0, 0.12);">
                            <li><a href="<?php echo Yii::$app->homeUrl; ?>site/results" style="background-color:rgba(27,168,183,.9) !important;color: white;">TORNA ALLA HOME</a></li>
                        </ul>

                        <div class="main-nav scrollbar-outer">
                            <ul id="nav-tabs-wrapper" class="nav nav-tabs style-5 nav-pills nav-stacked tsells well" style="max-height: 535px; overflow-y: scroll;">

                                <?php foreach ($result as $key => $value) { ?>
                                    <li><a href="#vtab2" data-toggle="tab" data-original='<?php echo $value['original_key'];?>' name="<?php echo $key; ?>"><?php echo $key; ?></a></li><br>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>

                <style>
                    h6 {
                        font-size: 13px;
                        font-weight: 500;
                    }
                </style>

                <div class="row col-sm-9 unmargin">
                    <div class="panel panel-primary ">
                        <div class="panel-heading"> <span class="iconthing"></span></div>
                        <div class="panel-body">
                            <h2 class="headers-for-subheaders">I tuoi risultati <?php echo($user[0]['first_name'].' '.$user[0]['last_name']); ?></h2>
                            <div id="subHeader">#</div>
                            <h2 class="headers-for-subheaders advice">Cosa ti consigliamo di fare</h2>
                            <div id="advice">Loading...</div>
                            <div id="container" style="height: 400px; margin: 0 auto"></div>
                            <div id="basso" style="float: left; margin-left: 40px;   position: absolute;
    margin-top: -30px;"><h6>Basso</h6></div>
                            <div id="alto" style="float: right; margin-right: 10px;     position: absolute;
    margin-top: -30px;right: 30px;"><h6 id="key">Alto</h6></div>
                            <div id="poche" style="float: left; margin-left: 10px;   position: absolute;
    margin-top: -60px;"><h6>Poche</h6></div>
                            <div id="molte" style="float: left; margin-left: 0px;   position: absolute;
    margin-top: -380px;"><h6>Molte</h6></div>

                            <h2 class="headers-for-subheaders info">Maggiori informazioni</h2>
                            <div id="description">#</div><br>




                            <button type="button" class="btn btn-success read-more btn-lg" data-toggle="modal" data-target="#data-table">Scopri il tuo DNA</button>
                            <div class="modal fade" id="data-table" role="dialog">
                                <div class="modal-dialog modal-lg">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Maggiori informazioni</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table id="data-table-content" class="cell-border" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Gene</th>
                                                    <th>Snp</th>
                                                    <th>Effective_allele</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="vtab">
                            <h3></h3>
                            <p></p><br>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="for-mobile">
                    <div class="col-sm-3">
                        <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Tabs</a>

                        <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well" style="    box-shadow: 0 1px 3px 0 rgba(255, 255, 255, 0.16), 0 1px 3px 0 rgba(0, 0, 0, 0.12);">
                            <li><a href="<?php echo Yii::$app->homeUrl; ?>site/results" style="background-color:rgba(27,168,183,.9) !important;color: white;">TORNA ALLA HOME</a></li>
                        </ul>

                        <div class="main-nav scrollbar-outer">
                            <ul id="nav-tabs-wrapper" class="nav nav-tabs style-5 nav-pills nav-stacked well sels" style="max-height: 535px; overflow-y: scroll;">

                                <?php foreach ($result as $key => $value) { ?>
                                    <li><a href="#vtab2" data-toggle="tab" data-original='<?php echo $value['original_key'];?>' name="<?php echo $key; ?>"><?php echo $key; ?></a></li><br>
                                <?php } ?>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>



        <!-- Modal -->
        <button type="button" class="btn btn-info btn-lg" style='display: none;' data-toggle="modal" data-target="#myModal">Open Modal</button>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Guida alla lettura</h4>
                    </div>
                    <div class="modal-body">
                        <p><b>Confronta il tuo risultato con quello della popolazione europea.</b><br>
                            La lina blu indica il numero delle persone con un determinato rischio genetico.<br>
                            La linea verde indica il tuo rischio genetico.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    <?php } else { ?>
        <script type="application/javascript">
            alert('User Id is not valid');
            window.history.back();
        </script>
    <?php } ?>

<?php } ?>






