<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 24.01.18
 * Time: 13:07
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Acquistare';
$this->params['breadcrumbs'][] = $this->title;

?>


<!--<h1><?/*= $info */?></h1>-->


<?php if($status == 'buy') { ?>
    <style type="text/css">
        .loxatron, .loxatron:hover, .loxatron:focus {
            color: white;
            background-color: #00adef;
            border: 1px solid #b9b6b6;
            font-weight: 200;
            border-radius: 3px;
            margin: auto;
            display: block;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .different ul li {
            font-size: 18px !important;
            margin-left: 35px;
            list-style-type: disc;
            line-height: 30px;
        }
    </style>
    <script>
        $(document).ready(function () {
            if($('#customButton').length > 0) {
                var handler = StripeCheckout.configure({
                    key: 'pk_live_jISuAVgDyITNrh8Gs0YgWv3T',
                    image: 'http://antiaging.allelica.com/img/pack.jpg',
                    locale: 'auto',
                    token: function(token) {
                        // You can access the token ID with `token.id`.
                        // Get the token ID to your server-side code for use.
                    }
                });
                document.getElementById('customButton').addEventListener('click', function(e) {
                    e.preventDefault();
                    setCookie('buy','done',365)
                    ga('send', 'event', 'pagamento');
                    if(!document.getElementById('terms').checked) {
                        alert("Assicurati di avere letto e accettato i termini e le condizioni di acquisto.\n");
                        $('#terms').focus();
                        $('#terms').addClass('notslected');
                        $('#terms').next('span').css('font-size','34px;');
                        $('#terms').next('span').css('color','red');
                        $('#terms').next('span').css('font-weight','bold');
                        return false;
                    } else {
                        // Open Checkout with further options:
                        window.location = "<?php echo Yii::$app->homeUrl; ?>acquista/acquistapayment";
                    }
                });

                // Close Checkout on page navigation:
                window.addEventListener('popstate', function() {
                    handler.close();
                });
            }
        })
    </script>
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/pack_2.png" width="100%"><br><br>
                    <br>
                    <input type="checkbox" id="terms"><span>Ho letto e accettato l'informativa su <a href="<?php echo Yii::$app->homeUrl; ?>condizioni/condizioni" target="_blank">termini e condizioni di acquisto</a>  </span>
                    <script src="https://checkout.stripe.com/checkout.js"></script>
                    <br>
                    <button id="customButton" class="btn btn-main" style="margin-bottom: 25px;">Acquista ora &euro;<?= $price ?></button>
                    <form id="payment" method="post" action="">
                        <input type="hidden" value="" name="token" id="token">
                    </form>
                </div>

                <div class="col-md-6">
                    <div class="block different">
                        <h2>Cosa riceverai:</h2>
                        <ul>
                            <li>Report completo e dettagliato</li>
                            <li>Consulto telefonico</li>
                            <li>Piano Alimentare Personalizzato</li>
                            <li>Accesso alle applicazioni multimediali per gestire la tua alimentazione</li>
                            <li>Accesso alle applicazioni multimediali per conoscere le tue predisposizioni alle malattie ereditarie</li>
                        </ul>
                    </div>
                </div>

            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- header close -->
<?php } ?>





<?php if($status == 'payment') { ?>
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/pack_2.png" width="100%"><br><br>
                </div>

                <style type="text/css">
                    .loxatron, .loxatron:hover, .loxatron:focus {
                        color: white;
                        background-color: #00adef;
                        border: 1px solid #b9b6b6;
                        font-weight: 200;
                        border-radius: 3px;
                        margin: auto;
                        display: block;
                        margin-top: 15px;
                        margin-bottom: 15px;
                    }
                    .form-control {
                        margin-top: -10px;
                        margin-bottom: 11px;
                    }
                    .help-block-error {
                        font-size: 17px !important;
                        line-height: 5px !important;
                        margin-bottom: 20px;
                    }
                    #final-submit {
                        padding: 5px 12px;
                        margin-bottom: 7px;
                        margin-top: 30px;
                    }
                    #importo {
                        font-size: 17px;
                        margin-top: 15px;
                        margin-bottom: 5px;
                    }
                    #importo span {
                        font-weight: 400;
                        color: red;
                    }
                </style>

                <div class="col-md-6">
                    <div class="block different">
                        <script src="https://js.stripe.com/v3/"></script>
                        <script>
                            //var stripe = Stripe('pk_test_qJecNIo7u8bAHZIzJOozqvCp');
                            var stripe = Stripe('pk_live_jISuAVgDyITNrh8Gs0YgWv3T');
                            var elements = stripe.elements();
                        </script>

                        <script type="text/javascript">

                        </script>
                        <div id="error_payment" style="color: red;font-size: 28px;margin-bottom: 0px;"></div>

                        <script type="text/javascript">
                            $(document).ready(function (e) {
                                
                            })
                        </script>


                        <div id="third-step" class="form-step" style="display: block;">
                            <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/secure-logos.png" style="width: 100%;">
                            <?php if(isset($condition) && ($condition == 'dataSaveSuccessEmailSuccess' || $condition == 'dataSaveSuccessEmailError')) { ?>
                                <br><br>
                                <div class="alert alert-success">
                                    <strong style="margin-right: 10px;">Successo!</strong> Il tuo pagamento è stato registrato con successo.
                                    <a href="<?php echo Yii::$app->homeUrl; ?>landinghome" style="text-decoration: underline;margin-left: 5px;">Home</a>

                                    <?php if($condition == 'dataSaveSuccessEmailError') {?>
                                        <br><br><code>Le informazioni di pagamento non sono state inviate all'amministratore del sito.</code><br>
                                    <?php } ?>

                                </div>
                            <?php } else { ?>
                                <div class="form-row">
                                    <div id="importo">Verrà effettuato sulla tua carta un addebito di <span>€<?= $price ?></span></div>
                                    <label for="card-element">
                                        Carta di credito
                                    </label>
                                    <div id="card-element" class="StripeElement StripeElement--empty"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;">
                                            <iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame3" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-43b084ba40549a880321a6b5e0969cd0.html#style[base][fontSize]=16px&amp;style[base][color]=%2332325d&amp;componentName=card&amp;wait=false&amp;rtl=false&amp;features[noop]=true&amp;origin=https%3A%2F%2Fallelica.com&amp;referrer=https%3A%2F%2Fallelica.com%2Fprevenzione%2Fcheckout.html&amp;controllerId=__privateStripeController0" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; height: 19.2px;"></iframe>
                                            <input class="__PrivateStripeElement-input" aria-hidden="true" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important;">
                                        </div>
                                    </div>

                                    <!-- Used to display Element errors -->
                                    <div id="card-errors" role="alert"></div>
                                </div><br>

                                <?php if(isset($condition) && ($condition == 'postDoesNotExists' || $condition == 'dataSaveError')) {?>
                                    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                                    <?= $form->field($model, 'email')->textInput() ?>

                                    <?php if($condition == 'dataSaveError') {?>
                                        <code>Errore inaspettato</code><br><br>
                                    <?php } ?>

                                    <div class="form-group">
                                        <?= Html::submitButton($model->isNewRecord ? 'Invia il pagamento' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                                    </div>

                                    <?php ActiveForm::end(); ?>
                                <?php } ?>
                            <?php } ?>
                        </div>


                    </div>
                </div>
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- header close -->
<?php } ?>




<?php if($status == 'barcode') { ?>
    <?php $this->title = 'Barcode'; $this->params['breadcrumbs'][] = $this->title;?>
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/pack_2.png" width="100%"><br><br>
                </div>

                <style type="text/css">
                    .loxatron, .loxatron:hover, .loxatron:focus {
                        color: white;
                        background-color: #00adef;
                        border: 1px solid #b9b6b6;
                        font-weight: 200;
                        border-radius: 3px;
                        margin: auto;
                        display: block;
                        margin-top: 15px;
                        margin-bottom: 15px;
                    }
                    .form-control {
                        margin-top: -10px;
                        margin-bottom: 11px;
                    }
                    .help-block-error {
                        font-size: 17px !important;
                        line-height: 5px !important;
                        margin-bottom: 20px;
                    }
                    #final-submit {
                        padding: 5px 12px;
                        margin-bottom: 7px;
                        margin-top: 30px;
                    }
                    #importo {
                        font-size: 17px;
                        margin-top: 15px;
                        margin-bottom: 5px;
                    }
                    #importo span {
                        font-weight: 400;
                        color: red;
                    }
                    label {
                        font-weight: 400;
                        font-size: 20px;
                        margin-left: -46px;
                        margin-bottom: 20px;
                        color: #20536c;
                    }
                    .input-group-addon {
                        background-color: #fff;
                        border: 1px solid #fff;
                    }
                    .glyphicon {
                        font-size: 30px;
                        top: 20px;
                    }
                    .n-button {
                        border-radius: 4px;
                        margin-left: 15px;
                        width: 120%;
                        margin-top: 15px;
                    }
                </style>
                <script type="text/javascript">
                    $(document).ready(function (e) {
                        var html = $('.field-barcodecontrol-barcode').html();
                        $('.field-barcodecontrol-barcode').html('<div class="input-group"><span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-barcode"></i></span>' + html + '</div>');
                    })
                </script>

                <div class="col-md-6">

                    <?php if(isset($condition) && ($condition == 'new' || $condition = 'wrongBarcode' || $condition = 'registeredBarcode')) {?>

                        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                            <p>Si prega di scrivere il codice a barre qui sotto:</p><br>

                            <?= $form->field($model, 'barcode', ['inputOptions' => ['required' => 'true', 'class' => 'form-control input-lg', 'maxlength' => '20', 'minlength' => '2', 'aria-describedby' => 'sizing-addon2']])->label('Barcode') ?>

                            <?php if($condition == 'wrongBarcode') {?>
                                <code style="margin-left: 10px;">Codice a barre non valido</code><br>
                            <?php } ?>

                            <?php /*if($condition == 'registeredBarcode') {*/?><!--
                                <code style="margin-left: 10px;">Questo codice a barre già registrato</code><br>
                            --><?php /*} */?>

                            <div class="input-group">
                                <?= Html::submitButton('Registro', ['class' => 'btn btn-success btn-lg n-button', 'name' => 'signup-button']) ?>
                            </div>

                        <?php ActiveForm::end(); ?>

                    <?php } ?>

                </div>
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- header close -->
<?php } ?>



<?php if($status == 'register') { ?>
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/pack_2.png" width="100%"><br><br>
                </div>

                <style type="text/css">
                    .loxatron, .loxatron:hover, .loxatron:focus {
                        color: white;
                        background-color: #00adef;
                        border: 1px solid #b9b6b6;
                        font-weight: 200;
                        border-radius: 3px;
                        margin: auto;
                        display: block;
                        margin-top: 15px;
                        margin-bottom: 15px;
                    }
                    .form-control {
                        margin-top: -10px;
                        margin-bottom: 11px;
                    }
                    .help-block-error {
                        font-size: 17px !important;
                        line-height: 5px !important;
                        margin-bottom: 20px;
                    }
                </style>

                <div class="col-md-6">
                    <div class="block different">
                        <script src="https://js.stripe.com/v3/"></script>
                        <script>
                            //var stripe = Stripe('pk_test_qJecNIo7u8bAHZIzJOozqvCp');
                            var stripe = Stripe('pk_live_jISuAVgDyITNrh8Gs0YgWv3T');
                            var elements = stripe.elements();
                        </script>

                        <script type="text/javascript">
                            var datiPersonali    = false;
                            var datiDiSpedizione = false;

                            var fields = {
                                "name":         "Il nome deve essere compilato correttamente",
                                "last_name":    "Il cognome deve essere compilato correttamente",
                                "email":        "L'indirizzo email deve essere compilato correttamente",
                                "password":     "La lunghezza della password deve essere almeno 5",
                                "password1":    "La lunghezza della password deve essere almeno 5",
                                "mobile":       "Il numero di cellulare deve essere compilato correttamente",
                                "address":      "L'indirizzo deve essere compilato",
                                "cap":          "Il codice postale deve essere compilato",
                                "city":         "Il nome della città è richiesto",
                                "passwordError":"Le passwords non corrispondono",
                            };
                        </script>
                        <div id="error_payment" style="color: red;font-size: 28px;margin-bottom: 0px;"></div>
                        <script>
                            if( location.search.indexOf('error')>=0) {
                                document.getElementById('error_payment').innerHTML = "C'è stato un problema nei dati di pagamento";
                            }
                        </script>
                        <script type="text/javascript">
                            var pass_1 = '';
                            var pass_2 = '';
                            var allright = false;

                            $(document).ready(function () {
                                $('.second-form').fadeOut();
                                $('#to_second-step').click(function (e) {
                                    pass_1 = $('#signupform-password').val().trim();
                                    pass_2 = $('#signupform-password_repeat').val().trim();

                                    if(datiPersonali && datiDiSpedizione) {e.preventDefault();}
                                    if(!$("#form-signup input[type=first_name]")[0].validity.valid || !$("#form-signup input[name='SignupForm[last_name]']")[0].validity.valid ||
                                        !$("#form-signup input[type=email]")[0].validity.valid || !$("#form-signup input[type=password]")[0].validity.valid || !$("#form-signup input[name='SignupForm[password_repeat]']")[0].validity.valid) {
                                        datiPersonali = false;
                                    } else {datiPersonali = true;}

                                    if(datiPersonali) {
                                        if(pass_1 == pass_2) {$('.first-form').fadeOut(50); $('.second-form').fadeIn(300);
                                        } else {alert('Le password non corrispondono'); return false;}
                                    }
                                });

                                $('#to_first-step').click(function (e) {
                                    if(datiPersonali && datiDiSpedizione) {e.preventDefault();}
                                    $('.second-form').fadeOut(50);
                                    $('.first-form').fadeIn(300);
                                });

                                $('#form-signup .btn-success').click(function (e) {
                                    if(!$("#form-signup input[name='SignupForm[mobile]']")[0].validity.valid || !$("#form-signup input[name='SignupForm[address]']")[0].validity.valid ||
                                        !$("#form-signup input[name='SignupForm[zip_code]']")[0].validity.valid || !$("#form-signup input[name='SignupForm[city]']")[0].validity.valid) {
                                        datiDiSpedizione = false;
                                        e.preventDefault();
                                    } else {
                                        datiDiSpedizione = true;
                                        if(!$("#form-signup input[type=first_name]")[0].validity.valid || !$("#form-signup input[name='SignupForm[last_name]']")[0].validity.valid ||
                                            !$("#form-signup input[type=email]")[0].validity.valid || !$("#form-signup input[type=password]")[0].validity.valid || !$("#form-signup input[name='SignupForm[password_repeat]']")[0].validity.valid) {
                                            datiPersonali = false;
                                        } else {datiPersonali = true;}
                                    }
                                    if(pass_1 != pass_2) {alert('Le password non corrispondono'); e.preventDefault();}
                                    if(datiPersonali && datiDiSpedizione && (pass_1 == pass_2)) {allright = true; $('#form-signup').submit();}
                                });

                                $('#form-signup').on('submit',function(e){if(!allright) {e.preventDefault();}})
                            })
                        </script>


                        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                            <div class="first-form">
                                <?= $form->field($model, 'first_name', ['inputOptions' => ['required' => 'true', 'text' => 'Rustam', 'minlength' => '2']])->label('Nome')->input('first_name') ?>

                                <?= $form->field($model, 'last_name', ['inputOptions' => ['required' => 'true', 'minlength' => '2']])->label('Cognome') ?>

                                <!--<?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Username') ?>-->

                                <?= $form->field($model, 'email', ['inputOptions' => ['required' => 'true']])->label('Email')->input('email') ?>

                                <?= $form->field($model, 'password', ['inputOptions' => ['required' => 'true', 'minlength' => '5']])->passwordInput()?>

                                <?= $form->field($model, 'password_repeat', ['inputOptions' => ['required' => 'true', 'minlength' => '5']])->passwordInput()->label('Ripeti la password')?>

                                <button id="to_second-step" type="submit" class="btn btn-primary change-step">Avanti</button>
                            </div>

                            <div class="second-form">
                                <?= $form->field($model, 'mobile', ['inputOptions' => ['placeholder' => "3391234567", 'required' => 'true', 'minlength' => '5']])->label('Telefono') ?>

                                <?= $form->field($model, 'address', ['inputOptions' => ['placeholder' => "Via delle vie, 124", 'required' => 'true', 'minlength' => '2']])->label('Indirizzo') ?>

                                <?= $form->field($model, 'zip_code', ['inputOptions' => ['placeholder' => "00000", 'required' => 'true', 'minlength' => '2']])->label('CAP') ?>

                                <?= $form->field($model, 'city', ['inputOptions' => ['placeholder' => "Parma", 'required' => 'true', 'minlength' => '2']])->label('Citta') ?>

                                <?= $form->field($model, 'note')->label('Come ci hai conosciuti?')->textarea() ?>

                                <div class="form-group">
                                    <button id="to_first-step" type="submit" class="btn btn-primary change-step">Indietro</button>
                                    <?= Html::submitButton('Registrati', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
                                </div>
                            </div>
                        <?php ActiveForm::end(); ?>


                    </div>
                </div>
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- header close -->
<?php } ?>