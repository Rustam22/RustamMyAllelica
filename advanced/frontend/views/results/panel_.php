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
<script>
	
</script>
<?php if($status == "biometrics"){?>


    <style type="text/css">
        .subheading-1 {
            color: #20536c;
            padding-bottom: 0px;
            text-transform: capitalize;
            font-weight: 400;
            font-size: 24px;
            line-height: 25px;
        }
        .panel-body {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px 40px;
        }

        input[type="checkbox"], input[type="radio"]{
            position: absolute;
            right: 9000px;
        }

        /*Check box*/
        input[type="checkbox"] + .label-text:before{
            content: "\f096";
            font-family: "FontAwesome";
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing:antialiased;
            width: 1em;
            display: inline-block;
            margin-right: 5px;
        }

        input[type="checkbox"]:checked + .label-text:before{
            content: "\f14a";
            color: #2980b9;
            animation: effect 250ms ease-in;
        }

        input[type="checkbox"]:disabled + .label-text{
            color: #aaa;
        }

        input[type="checkbox"]:disabled + .label-text:before{
            content: "\f0c8";
            color: #ccc;
        }

        /*Radio box*/

        input[type="radio"] + .label-text:before{
            content: "\f10c";
            font-family: "FontAwesome";
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing:antialiased;
            width: 1em;
            display: inline-block;
            margin-right: 5px;
        }

        input[type="radio"]:checked + .label-text:before{
            content: "\f192";
            color: #8e44ad;
            animation: effect 250ms ease-in;
        }

        input[type="radio"]:disabled + .label-text{
            color: #aaa;
            font-weight: 300;
        }

        input[type="radio"]:disabled + .label-text:before{
            content: "\f111";
            color: #ccc;
        }

        /*Radio Toggle*/

        .toggle input[type="radio"] + .label-text:before{
            content: "\f204";
            font-family: "FontAwesome";
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing:antialiased;
            width: 1em;
            display: inline-block;
            margin-right: 10px;
        }

        .toggle input[type="radio"]:checked + .label-text:before{
            content: "\f205";
            color: #16a085;
            animation: effect 250ms ease-in;
        }

        .toggle input[type="radio"]:disabled + .label-text{
            color: #aaa;
        }

        .toggle input[type="radio"]:disabled + .label-text:before{
            content: "\f204";
            color: #ccc;
        }


        @keyframes effect{
            0%{transform: scale(0);}
            25%{transform: scale(1.3);}
            75%{transform: scale(1.4);}
            100%{transform: scale(1);}
        }


        .biometrics .label-text {
            font-weight: 400;
            font-size: 20px;
        }
        .biometrics h3 {
            font-size: 21px;
        }
        .biometrics .form-block {
            float: left;
            margin-right: 50px;
        }
    </style>

    <br>
    <p>
        <label for="amount">Price range:</label>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
    </p>

    <div class="container biometrics">
        <div class="row centered-form">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title subheading-1">Aggiungi i tuoi dati biometrici</h3>
                </div>

                <div class="panel-body">
                    <form id="Biometrics"  role="form" method="post" enctype="multipart/form-data">

                        <div class="row">

                            <div class="form-block">
                                <h3 style="margin-bottom: 15px; font-weight: bold">Sesso</h3>
                                <div class="form-check">
                                    <label style="font-size: 20px">
                                        <input type="radio" name="radio" checked> <span class="label-text">Maschio</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label style="font-size: 20px">
                                        <input type="radio" name="radio"> <span class="label-text">Femmina</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-block">
                                <h3 style="margin-bottom: 15px; font-weight: bold">Età</h3>
                                <div data-role="rangeslider">
                                    <label for="price-min">Price:</label>
                                    <input type="range" name="price-min" id="price-min" value="0" min="0" max="100">
                                    <label for="price-max">Price:</label>
                                    <input type="range" name="price-max" id="price-max" value="800" min="0" max="100">
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>






    <div class="container">
        <?php $form = ActiveForm::begin(['options' => ['id' => 'Biometrics', 'enctype' => 'multipart/form-data']]) ?>

        <div class="form-check">
            <?= $form->field($model, 'sex')->radioList(
                [ 'm' => 'm',  'f' => 'f'],
                ['prompt' => 'Select']
            )?>


        </div>


        <?= $form->field($model, 'age')?>

        <?= $form->field($model, 'height')?>

        <?= $form->field($model, 'weight')?>

        <?= $form->field($model, 'target')->dropDownList(
            [ 'Forte perdita di peso'=>'Forte perdita di peso', 'Leggera perdita di peso' => 'Leggera perdita di peso', 'Ricerca del mantenimento del benessere personale' => 'Ricerca del mantenimento del benessere personale', 'Leggera crescita di massa muscolare' => 'Leggera crescita di massa muscolare',
                'Forte crescita di massa muscolare' => 'Forte crescita di massa muscolare'],
            ['prompt' => 'Select']
        )?>
        <?php echo 'Forte perdita di peso','Leggera perdita di peso','Ricerca del  mantenimento del benessere personale','Leggera crescita  di massa  muscolare','Forte crescita  di massa muscolare'; ?>

        <?= $form->field($model, 'lifestye')->dropDownList(
            [ 'Sedentario' => 'Sedentario',  'Poco Attivo' => 'Poco Attivo', 'Attivita nella media'=> 'Attivita nella media', 'Molto attivo' => 'Molto attivo',  'Sportivo' =>'Sportivo'],
            ['prompt' => 'Select']
        )?>

        <?= $form->field($model, 'type')->dropDownList(
            [ 'Onnivora' => 'Onnivora', 'Vegetariana'=>'Vegetariana',  'Vegana'=>'Vegana'],
            ['prompt' => 'Select']
        )?>

        <?= $form->field($model, 'lactose_intolerance')->dropDownList(
            [ 'Si' => 'Si', 'No' => 'No', 'Non sono sicuro' => 'Non sono sicuro'],
            ['prompt' => 'Select']
        )?>

        <?= $form->field($model, 'gluten_celiac_intolerance')->dropDownList(
            ['Si' =>  'Si',  'No' => 'No', 'Non sono sicuro' => 'Non sono sicuro'],
            ['prompt' => 'Select']
        )?>


        <?= $form->field($model, 'other')->dropDownList(
            ['Si' =>  'Si',  'No' => 'No'],
            ['prompt' => 'Select']
        )?>


        <?= $form->field($model, 'other_information')?>

        <?= Html::submitButton('Save', ['class' => 'btn btn-success'])?>
        <?php ActiveForm::end() ?>
    </div>

<?php } ?>



<?php if($status == "panel") {
    $this->params['breadcrumbs'][] = 'Results';
    ?>
<div class="for-results">

    <link href="<?php echo Yii::$app->homeUrl; ?>allelica/css/results.css" rel="stylesheet">
    <script type="text/javascript">
        $(document).ready(function () {
            localStorage.removeItem("currPanel");
            $('.card-heading').click(function (e) {
                var panel = $(this).attr('data-original');
		localStorage.setItem('currPanel', encodeUri(panel));
            });
        })
    </script>


    <div class="container">

        <div class="row">
            <div class="jumbotron">
                <h1 class="blue" style="color:rgba(27,168,183,.9) !important;text-align: center;font-size: 25px;padding: 0px 16px;font-weight: 500;line-height: 42px;">
                    Tutti i pannelli relativi alla <?php echo $product;?> 
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
                                    <a href="<?php echo Yii::$app->homeUrl; ?>results/panel_text?panel=<?php echo $value['original_key'];?>&product=<?php echo $product;?>">
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







<?php if($status == "panel12") { ?>

<script type="text/javascript">
    $(document).on('click', '.panel-heading span.clickable', function(e){
        var $this = $(this);
        if(!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    })
</script>


<div class="container jumbotron">
    <div class="row">
        <?php foreach ($result as $key => $value) { ?>

            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="<?php echo Yii::$app->homeUrl; ?>results/panel_text?id=<?php echo $value['original_key']; ?>">
                                <?php echo $key; ?>
                            </a>
                        </h3>
                        <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                    </div>
                    <div class="panel-body">
                        <?php echo $value; ?>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>
<?php } ?>



<?php if($status == "result") {
    $this->params['breadcrumbs'][] = ['label' => 'Results', 'url' => ['index']];

    ?>


    <script src="https://code.highcharts.com/highcharts.src.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <style>
        .highcharts-plot-lines-0, .highcharts-plot-bands-0, .highcharts-plot-line-label , .highcharts-plot-band-label {}
        .highcharts-legend .highcharts-point{
               display: none;
        }
        .highcharts-tick {
            display: none;
        }
    </style>

    <script>

	 var doChartNoData = function () {
                userScoreForNoData  = 0.25;
                if(userScore >= 1)
			userScoreForNoData = 0.75;
		var gaugeOptions = {
			chart: {
        			type: 'gauge'
    			},
    			title: null,
			pane: {
        			center: ['50%', '85%'],
        			size: '140%',
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
						x: 700,
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
}))};

        function doChart() {

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
            frequencies = chartFrequency;

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
            console.log('rQunatileIndexValue75: ' + values[indexFor75] + ', indexFor75: ' + indexFor75);
            console.log('rQunatileIndexValue25: ' + values[indexFor25] + ', indexFor25: ' + indexFor25);


            var precurrentPanel = '';
            $('.user-experience .main-nav #nav-tabs-wrapper li a').click(function () {
                localStorage.setItem('currPanel', encodeURI($(this).attr('data-original')));
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
            if(currentPanel.indexOf('carb') >= 0 || currentPanel.indexOf('grassi') >= 0) {
                textPanel = 'Alta sensibilità';
            } else {
                textPanel = 'Area a rischio elevato';
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
            if(currentPanel.indexOf('carb') >= 0 || currentPanel.indexOf('grassi') >= 0) {
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
                    x: 20,
                    y: 5,
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
                        	fontSize: '18px',
                        	fontFamily: '"Josefin Sans", sans-serif',
                        	color: '#3b4045',
				fontWeight: '700'
			}
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

    $(document).ready(function() {
        $('.user-experience .main-nav .nav-tabs-dropdown').each(function(i, elm) {
            $(elm).text($(elm).next('ul').find('li.active a').text());
        });
        $('.user-experience .main-nav .nav-tabs-dropdown').on('click', function(e) {
            e.preventDefault();
            $(e.target).toggleClass('open').next('ul').slideToggle();
        });
        $('.user-experience .main-nav #nav-tabs-wrapper a[data-toggle="tab"]').on('click', function(e) {
            e.preventDefault();
            $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());
        });

        $('.user-experience .main-nav #nav-tabs-wrapper li:first').addClass('active');

        $('.user-experience .main-nav #nav-tabs-wrapper li a').click(function () {
            var menu = $(this).attr('data-original');
            $.ajax({
                url: 'panel_text',
                type: 'GET',
                dataType : 'json',
                data: {panel:menu,product:'<?php echo $product;?>'},
                success: function(data) {
	            $('#description').html('')
        	    $('#subHeader').html('')
                    $('.panel .panel-heading').html('');
    
		        console.log(data)
			console.log('...');
                    var panel_data = JSON.parse(data.panel_data);
                    userScore = JSON.parse(data.score);
                    userName = data.first_name;
                    //alert(userScore);
                    //console.log(userScore);

                    chartData = panel_data.data;
                    chartFrequency = panel_data.frequency;
                    if(!chartData && !chartFrequency) {
                        var containerText = $('.user-experience .panel-body .contain').html(' ');
                        $('.user-experience .panel-body #container').css('display', 'block');
			doChartNoData();
			$('.highcharts-data-label').detach();
                    } else {
                        $('.user-experience .panel-body #container').css('display', 'block');
                        doChart();
                    }




                    console.log(data.final_array[localStorage.getItem("currPanel")]);
		    subHeader = data.final_array[localStorage.getItem("currPanel")]['subheader_text']
		    $('#subHeader').html(subHeader);
                    $('.user-experience .panel-body #status-text').html('You have ' + data.final_array[localStorage.getItem("currPanel")] + ' risk');
                    $('.user-experience .panel-body #status-text').addClass(data.final_array[localStorage.getItem("currPanel")]);



                    $('.panel .panel-heading').text(localStorage.getItem("currPanel"));
                    $('#description').html(data.base_text);
                    /*$('.panel .panel-body span').text(data.panel_data);*/
                }
            });
        });

        try {
            $('.user-experience .main-nav #nav-tabs-wrapper li a[data-original="' + localStorage.getItem("currPanel") + '"]').click();
        } catch(e) {
            $('.user-experience .main-nav #nav-tabs-wrapper li a:first').click();
        }
    })
</script>
<style type="text/css">
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

    @media screen and (min-width: 769px) {
        #nav-tabs-wrapper {
            display: block!important;
        }
    }
    @media screen and (max-width: 768px) {
        .user-experience .nav-tabs-dropdown {
            display: block;
        }
        .user-experience #nav-tabs-wrapper {
            display: none;
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
</style>




<div class="container user-experience">
    <div class="row">
        <div class="col-sm-3">
            <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Tabs</a>

            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well" style="    box-shadow: 0 1px 3px 0 rgba(255, 255, 255, 0.16), 0 1px 3px 0 rgba(0, 0, 0, 0.12);">
                <li><a href="<?php echo Yii::$app->homeUrl; ?>site/results" style="background-color:rgba(27,168,183,.9) !important;color: white;">TORNA AI RISULTATI</a></li>
            </ul>

            <div class="main-nav">
                <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">

                    <?php foreach ($result as $key => $value) { ?>
                        <li><a href="#vtab2" data-toggle="tab" data-original='<?php echo $value['original_key'];?>' name="<?php echo $key; ?>"><?php echo $key; ?></a></li><br>
                    <?php } ?>

                </ul>
            </div>

        </div>

        <div class="row col-sm-9">
            <div class="panel panel-primary ">
                <div class="panel-heading"></div>
                <div class="panel-body">
		    <div id="subHeader">#</div>
                    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
			<div id="description">#</div>
                    <!--<span class="contain"><br><br></span>-->
                    <!--<span id="status-text" style="margin: auto;
    display: block;
    text-align: center;
    font-size: 20px;
    font-weight: 400;"></span>-->
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

    </div>
</div>







<?php } ?>



