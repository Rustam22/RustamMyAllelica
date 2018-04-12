<?php

use yii\helpers\Url;
use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\Biometrics;
?>
    <script>
        var biometricGender = 'null';

        $(document).ready(function() {
            $('#regForm input[name="Biometrics[sex]"').on('click', function() {
                //console.log($('input[name="Biometrics[sex]"]:checked').val());
                biometricGender = $('input[name="Biometrics[sex]"]:checked').val();
            });

        })
        jQuery(document).ready(function($) {
            $('#radio2').change(function(){
                if ($(this).is(':checked')) {
                    $("#pregnant").show();
                }
                else{
                    $("#pregnant").hide();
                }
            }).change();
        });
        jQuery(document).ready(function($) {
            $('#altro').change(function(){
                if ($(this).is(':checked')) {
                    $("#altro-comment").show();
                }
                else{
                    $("#altro-comment").hide();
                }
            }).change();
        });

    </script>


    <br><br>
    <div class="user-experience container col-md-6 col-md-offset-3">
        <?php $form = ActiveForm::begin(['options' => ['id' => 'regForm', 'enctype' => 'multipart/form-data']]) ?>
        <div class="panel panel-default">

            <div class="panel-heading">
                <h2 class="panel-title" style="text-align:center;color: #5e5e5e;font-size: 25px;">Compila il modulo per personalizzare la tua dieta</h2>
            </div>

            <div class="panel-body">

                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <div class="col-sm-8 col-md-offset-2">
                        <br>
                        <h4 class="panel-title">Sesso</h4>
                        <div>
                            <input type="radio" name="Biometrics[sex]" id="radio1" class="radio gender-biometrics" required value="m"/>
                            <label for="radio1">Uomo</label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[sex]" id="radio2" class="radio gender-biometrics" required value="f"/>
                            <label for="radio2">Donna</label>
                        </div>

                        <br><br>
                        <h4 class="panel-title" style="margin-top:70px;">Età:</h4>
                        <div class="range range-primary">
                            <!--<input type="range" name="Biometrics[age]" min="1" max="100" value="50" onmousemove="rangePrimary.value=value">-->
                            <input type="range" min="1" max="100" name="Biometrics[age]" value="50" class="slider" id="myRange-1"  onmousemove="rangePrimary.value=value">
                            <output id="rangePrimary">50</output>
                        </div>
                    </div>
                </div><div style="clear: both;"></div>


                <div class="tab">
                    <div class="col-sm-8 col-md-offset-2">
                        <br><br>
                        <h4 class="panel-title">Altezza:</h4>
                        <div class="range range-success">
                            <input type="range" min="130" max="220" value="175" name="Biometrics[height]" class="slider" id="myRange-2"  onmousemove="rangeSuccess.value=value + ' cm'">
                            <output id="rangeSuccess">175</output>
                        </div><br>

                        <h4 class="panel-title">Peso:</h4>
                        <div class="range range-warning">
                            <input type="range" name="Biometrics[weight]" min="40" max="150" value="95" class="slider" id="myRange-3" onmousemove="rangeWarning.value=value + ' kg'">
                            <output id="rangeWarning">95</output>
                        </div>
                    </div>
                </div><div style="clear: both;"></div>


                <div class="tab">
                    <div class="col-sm-8 col-md-offset-2">
                        <br><br>
                        <h4 class="panel-title">Il tuo obiettivo</h4>
                        <!--div>
                            <input type="radio" name="Biometrics[target]" id="radio11" class="radio" value="Forte perdita di peso"/>
                            <label for="radio11">Forte perdita di peso</label>
                        </div-->

                        <div>
                            <input type="radio" name="Biometrics[target]" id="radio22" class="radio" value="Leggera perdita di peso"/>
                            <label for="radio22"><span>Perdita di peso</span></label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[target]" id="radio33" class="radio" value="Ricerca del mantenimento del benessere personale"/>
                            <label for="radio33"><span>Mantenimento del benessere</span></label>
                        </div>
                        <div>
                            <input type="radio" name="Biometrics[target]" id="radio55" class="radio" value="Aumento del peso"/>
                            <label for="radio55"><span>Aumento del peso</span></label>
                        </div>
                        <div>
                            <input type="radio" name="Biometrics[target]" id="radio44" class="radio" value="Leggera crescita di massa muscolare"/>
                            <label for="radio44"><span>Crescita di massa muscolare</span></label>
                        </div>

                    </div>
                </div><div style="clear: both;"></div>


                <div class="tab">
                    <div class="col-sm-8 col-md-offset-2">
                        <br><br>
                        <h4 class="panel-title">Il tuo stile di vita</h4>
                        <div>
                            <input type="radio" name="Biometrics[lifestyle]" id="radio111" class="radio" value="Sedentario" />
                            <label for="radio111"><span>Sedentario</span></label>
                        </div>

                        <!--div>
                            <input type="radio" name="Biometrics[lifestyle]" id="radio222" class="radio" value="Poco Attivo"/>
                            <label for="radio222">Poco Attivo</label>
                        </div-->

                        <div>
                            <input type="radio" name="Biometrics[lifestyle]" id="radio333" class="radio" value="Attivita nella media"/>
                            <label for="radio333"><span>Attivo <span>(sport 1-2/settimana)</span></span></label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[lifestyle]" id="radio444" class="radio" value="Molto attivo"/>
                            <label for="radio444"><span>Sportivo <span>(sport 3-5/settimana)</span></span></label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[lifestyle]" id="radio555" class="radio" value="Sportivo"/>
                            <label for="radio555"><span>Agonista <span>(sport 6-7/settimana)</span></span></label>
                        </div>
                    </div><br><br><br>
                </div><div style="clear: both;"></div>


                <div class="tab">
                    <div class="col-sm-8 col-md-offset-2">
                        <br><br>
                        <h4 class="panel-title">La tue abitudine alimentare</h4>
                        <div>
                            <input type="radio" name="Biometrics[diet]" id="radio1111" class="radio" value="Onnivora"/>
                            <label for="radio1111"><span>Onnivora</span></label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[diet]" id="radio3333fish" class="radio" value="Vegetariana-pesce"/>
                            <label for="radio3333fish"><span>Vegetariana, <span>ma mangio pesce</span></span></label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[diet]" id="radio2222" class="radio" value="Vegetariana"/>
                            <label for="radio2222"><span>Vegetariana</span></label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[diet]" id="radio3333" class="radio" value="Vegana"/>
                            <label for="radio3333"><span>Vegana</span></label>
                        </div>
                    </div><br><br><br>
                </div><div style="clear: both;"></div>


                <div class="tab">
                    <div class="col-sm-8 col-md-offset-2">
                        <br><br>
                        <h4 class="panel-title">Pensi di essere intollerante al lattosio?</h4>
                        <div>
                            <input type="radio" name="Biometrics[lactose_intolerance]" id="radio11111" class="radio" value="Si"/>
                            <label for="radio11111">Si</label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[lactose_intolerance]" id="radio22222" class="radio" value="No"/>
                            <label for="radio22222">No</label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[lactose_intolerance]" id="radio33333" class="radio" value="Non sono sicuro"/>
                            <label for="radio33333">Non sono sicuro</label>

                            <div class="check-box-mania-lactose">
                                <div id="simptomLactose" class="addedQuestion" style="display: block;">Che sintomi avverti dopo l’ingestione di latte e/o derivati?<ul><li><input type="checkbox" value="meteorismo">Meteorismo</li><li><input type="checkbox" value="flautelenza">Flautelenza</li><li><input type="checkbox" value="nausea">Nausea</li><li><input type="checkbox" value="mal di testa">Mal di testa</li><li><input type="checkbox" value="stanchezza">Stanchezza</li><li><input type="checkbox" value="dolori addominali">Dolori addominali</li><li><input type="checkbox" value="diarrea">Diarrea</li><li><input type="checkbox" value="stitichezza">Stitichezza</li><li><input type="checkbox" value="altro" id="otherSimptomLactose">Altro</li></ul></div>
                                <div id="osl" style="display: block;"><input type="text" id="descrizioneAltriSintomiLattosio" placeholder="descrivicelo"></div>
                            </div>
                        </div>
                    </div>
                </div><div style="clear: both;"></div>


                <div class="tab">
                    <div class="col-sm-8 col-md-offset-2">
                        <br><br>
                        <h4 class="panel-title">Sei celiaco?</h4>
                        <div>
                            <input type="radio" name="Biometrics[gluten_celiac_intolerance]" id="radio111111" class="radio" value="Si"/>
                            <label for="radio111111">Si</label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[gluten_celiac_intolerance]" id="radio222222" class="radio" value="No"/>
                            <label for="radio222222">No</label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[gluten_celiac_intolerance]" id="radio333333" class="radio" value="Non sono sicuro"/>
                            <label for="radio333333">Non sono sicuro</label>

                            <div id="otherGluten" class="addedQuestion" style="display: block;">Che sintomi avverti dopo l’ingestione di glutine (pasta di semola, pane, prodotti da forno)? <ul><li><input type="checkbox" value="dolori o carmpi">Dolori/crampi addominali</li><li><input type="checkbox" value="gonfiore addominale">Gonfiore addominale</li><li><input type="checkbox" value="diarrea">Diarrea</li><li><input type="checkbox" value="stitichezza">Stitichezza</li><li><input type="checkbox" value="debolezza muscolare">Debolezza muscolare</li><li><input type="checkbox" value="astenia">Astenia</li><li><input type="checkbox" value="vomito">Vomito</li><li><input type="checkbox" value="eccessivo calo di peso">Eccessivo calo di peso</li>
                                    <li id="opGL"><input type="checkbox" value="altro" id="otherGlutenCheck">Altro<div id="oG" style=""><input type="text" placeholder="descrivicele" id="descrizioneAltroGlutine"></div></li>
                                </ul></div>
                        </div>
                    </div>
                </div><div style="clear: both;"></div>





                <div class="tab">
                    <div class="col-sm-8 col-md-offset-2">
                        <br><br>
                        <h4 class="panel-title">Soffri di altre patologie?</h4>

                        <div class="special-radio">
                            <div>
                                <input type="radio" name="Biometrics[other]" id="radio11111111" class="radio" value="Si"/>
                                <label for="radio11111111">Si</label>
                            </div>

                            <div>
                                <input type="radio" name="Biometrics[other]" id="radio22222222" class="radio" value="No"/>
                                <label for="radio22222222">No</label>
                            </div>
                        </div>


                        <br><br>
                        <div class="check-box-mania">
                            <h3>Quali?</h3>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[diabete1]" value="Si"> <span class="label-text">diabete di tipo 1</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[diabete2]" value="Si"> <span class="label-text">diabete di tipo 2</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[ipercolesterolemia]" value="Si" > <span class="label-text">ipercolesterolemia</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[ipertrigliceridemia]" value="Si"> <span class="label-text">ipertrigliceridemia</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[ipertensione_arteriosa]" value="Si"> <span class="label-text">ipertensione arteriosa</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[sindrome_metabolica]" value="Si"> <span class="label-text">sindrome metabolica</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[epatite]" value="Si"> <span class="label-text">epatite</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[pancreatite]" value="Si"> <span class="label-text">pancreatite</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[morbo_di_Crohn]" value="Si"> <span class="label-text">morbo di Crohn</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[colite]" value="Si"> <span class="label-text">colite</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[gastrite]" value="Si"> <span class="label-text">gastrite</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[diverticolite]" value="Si"> <span class="label-text">diverticolite</span>
                                </label>
                            </div>
                            <!--div class="form-check">
                                <label>
                                    <input type="checkbox" name="MoreBiometrics[is_pregnant]" value="Si"> <span class="label-text">in gravidanza</span>
                                </label>
                            </div-->


                            <input type="hidden" name="MoreBiometrics[more_lattosio]" class="add-hidden" value="">
                            <input type="hidden" name="MoreBiometrics[more_glutine_o_celiaco]" class="add-hidden-second" value="">


                            <div class="form-check">
                                <label>
                                    <input type="checkbox" id="altro"> <span class="label-text">altro</span>
                                </label>
                            </div>
                            <div class="form-check" id = "altro-comment" style="display:none;">
                                <label for="comment">Altro:</label>
                                <textarea class="form-control" rows="5" id="comment" name="MoreBiometrics[altro]" ></textarea>
                            </div>

                            <br>
                            <h3>In tal caso ti ricordo che le informazioni nutrizionali e le diete fornite dal nostro sito non costituiscono un parere medico per cui ti inviatiamo a consultare il tuo medico o specialista per il trattamento delle suddette patologie prima di variare la tua dieta e il tuo stile di vita.</h3>
                        </div>


                    </div>
                </div><div style="clear: both;"></div>

                <!--<div class="tab" >
                    <div class="col-sm-12">
                        <br><br>
                        <h4 class="panel-title">is_pregnant?</h4>
                        <div>
                            <input type="radio" name="Biometrics[is_pregnant]" id="radio111111" class="radio" value="Si"/>
                            <label for="radio111111">Si</label>
                        </div>

                        <div>
                            <input type="radio" name="Biometrics[is_pregnant]" id="radio222222" class="radio" value="No"/>
                            <label for="radio222222">No</label>
                        </div>
                    </div><br><br><br>
                </div><div style="clear: both;"></div>-->

                <div class="br-br-1"><br><br><br><br></div>
                <div class="br-br-2" style="display: none;"><br><br></div>
                <div style="text-align: center;">
                    <button type="button" id="prevBtn"  class="btn btn-primary" onclick="nextPrev(-1)">Indietro</button>
                    <button type="button" id="nextBtn"  class="btn btn-success">Avanti</button>
                    <button id="submitForm" class="btn btn-success" style="display:none;">Invia</button>
                </div>
                <div style="clear: both;"></div>


                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:10px; display: none;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>

            </div>
        </div>
        <?php ActiveForm::end() ?>
    </div>

    <script>
        var status = 'biometrics';
        var currentInputRadioValue = 'null';

        var specialRadioName = 'Biometrics[other]';
        var specialRadioValueSi = 'Si';
        var specialRadioValueNo = 'No';
    </script>
    <link rel="stylesheet" href="<?php echo Yii::$app->homeUrl; ?>allelica/css/biometrics.css">
    <script type="text/javascript" src="<?php echo Yii::$app->homeUrl; ?>allelica/js/biometrics.js"></script>

