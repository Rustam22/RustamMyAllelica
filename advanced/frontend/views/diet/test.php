<div class="container">
 <div style="display: none;">
        <button type="button" class="btn btn-primary" id= "ajaxbutton">
            Demo Ajax
        </button>

        <a href="<?php echo Yii::$app->homeUrl; ?>diet/download">Download Pdf</a>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mealModal" id="targetMealModal">
            Launch demo modal
        </button>
    </div>

   <script type="text/javascript">
        var jsonInitialData = <?php echo json_encode($my_variable); ?>;
        var jsonDefaultData = <?php echo json_encode($my_variable_def); ?>;
   </script>
        <div class="row">
            <div class="user-diet col-sm-12 col-md-2 left-tab-menu" >
                <ul class="nav nav-pills nav-stacked" role="tablist" style="margin-bottom: 10px;">
                    <li><a><button type="button" class="btn btn-primary" id="saveUserDiet" style="width: 100%;">Salva</button></a></li>
                    <li><a href="<?php echo Yii::$app->homeUrl; ?>diet/printer"><button type="button" class="btn btn-info" id="saveUserPDF" style="width: 100%;">Stampa</button></a></li>
                    <li><a><button type="button" class="btn btn-primary" id="resetPlan" style="width: 100%;">Reset</button></a></li>
                </ul>
                <div class="second-menu">
                    <ul class="nav nav-pills nav-stacked" role="tablist">
                        <li class="active"><a href="#">Lunedì</a></li>
                        <li><a href="#">Martedì</a></li>
                        <li><a href="#">Mercoledì</a></li>
                        <li><a href="#">Giovedì</a></li>
                        <li><a href="#">Venerdì</a></li>
                        <li><a href="#">Sabato</a></li>
                        <li><a href="#seven">Domenica</a></li>
                    </ul>
                </div>
            </div>

            <div class="user-diet col-sm-12 col-md-10 ">
                <div class=" testimonial-group" id="myDIV-1">
                    <div class="row text-center" id="myDIV-2">
                        <div class="card day-1 user-meal" id="day-1">
                            <h3 class="card-header primary-color white-text">Lunedì</h3>
                            <div class="inner-diet">
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                            </div>
			    <div id="day-1-recap" style="white-space: initial;">Seleziona tutti i cibi per calcolare i nutrienti</div>
                        </div>
                        <div class="card day-2 user-meal" id="day-2">
                            <h3 class="card-header primary-color white-text">Martedì</h3>
                            <div class="inner-diet">
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                            </div>
			    <div id="day-2-recap" style="white-space: initial;">Seleziona tutti i cibi per calcolare i nutrienti</div>
                        </div>
                        <div class="card day-3 user-meal" id="day-3">
                            <h3 class="card-header primary-color white-text">Mercoledì</h3>
                            <div class="inner-diet">
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                            </div>
                            <div id="day-3-recap" style="white-space: initial;">Seleziona tutti i cibi per calcolare i nutrienti</div>
                        </div>
                        <div class="card day-4 user-meal" id="day-4">
                            <h3 class="card-header primary-color white-text">Giovedì</h3>
                            <div class="inner-diet">
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                            </div>
			    <div id="day-4-recap" style="white-space: initial;">Seleziona tutti i cibi per calcolare i nutrienti</div>
                        </div>
                        <div class="card day-5 user-meal" id="day-5">
                            <h3 class="card-header primary-color white-text">Venerdì</h3>
                            <div class="inner-diet">
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                            </div>
                            <div id="day-5-recap" style="white-space: initial;">Seleziona tutti i cibi per calcolare i nutrienti</div>
			</div>
                        <div class="card day-6 user-meal" id="day-6">
                            <h3 class="card-header primary-color white-text">Sabato</h3>
                            <div class="inner-diet">
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                            </div>
			    <div id="day-6-recap" style="white-space: initial;">Seleziona tutti i cibi per calcolare i nutrienti</div>
                        </div>
                        <div class="card day-7 user-meal" id="day-7">
                            <h3 class="card-header primary-color white-text">Domenica</h3>
                            <div class="inner-diet">
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="plane-text"></div>
                                    <div class="plane-selects"></div><div class="plane-kcal"></div>
                                </div>
                            </div>
			                <div id="day-7-recap" style="white-space: initial;">Seleziona tutti i cibi per calcolare i nutrienti</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<div class="modal fade" id="modalSymptom">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hai avvertito dei sintomi ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
	<form id="formSymptom">
		<input type="hidden" name="id-meal" id="id-meal" value="">
		<ul>
			<li><input type="checkbox" name="symptom[]" value="dolori o carmpi">Dolori/crampi addominali</li>
			<li><input type="checkbox" name="symptom[]" value="gonfiore addominale">Gonfiore addominale</li>
			<li><input type="checkbox" name="symptom[]" value="diarrea">Diarrea</li>
			<li><input type="checkbox" name="symptom[]" value="stitichezza">Stitichezza</li>
			<li><input type="checkbox" name="symptom[]" value="debolezza muscolare">Debolezza muscolare</li>
			<li><input type="checkbox" name="symptom[]" value="astenia">Astenia</li>
			<li><input type="checkbox" name="symptom[]" value="vomito">Vomito</li>
 			</ul>
			Dopo quanto tempo hai avvertito questi sintomi:
			<select name="time">
				<option value="30" selected>30 minuti</option>
				<option value="1">1 ora</option>
				<option value="2">2 ore</option>
				<option value="3">3 ore</option>
			</select><br/>
			Altro
			<textarea id="descrizioneAltroGlutine" name="altro"></textarea>
	</form>
	</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="sendSymptom">Invia</button>
      </div>
    </div>
  </div>
</div>




    <div class="modal fade" id="mealModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><br>
                <h4 style="margin-left: 15px;">Scegli un cibo dalla lista:<div class="sundayLunch"></div> </h4>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeModal">Chiudi</button>
                    <button type="button" class="btn btn-primary" id="editDataJsonStorage">Seleziona</button>
                </div>
            </div>
        </div>
    </div>


    <link rel="stylesheet" href="<?php echo Yii::$app->homeUrl; ?>allelica/css/userdiet.css">
    <script type="text/javascript" src="<?php echo Yii::$app->homeUrl; ?>allelica/js/userdiet.js?2"></script>

