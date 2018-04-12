<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Accesso';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-login">
    <div class="container" style="background-color: #fff;">
        <!--<h2><?/*= Html::encode($this->title) */?></h2>-->
        <style>
            .site-login h3 {
                font-size: 21px;
            }
            .form-control {
                font-size: 20px;
                height: 48px;
            }
        </style>
        <script>
            $( document ).ready(function() {
                var str = "<?php if ($model->hasErrors()): ?>\n" +
                    "\n" +
                    "<?php echo($model->getErrors('password')[0]); ?>\n" +
                    "<?php endif; ?>";
                var res = str.replace("username", "email");
                document.getElementById('error_message').innerHTML = res;
            });
        </script>
        <div class="row">

            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inserisci la tua email e password</h3>
                    </div>
                    <div class="panel-body">
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                            <fieldset>
                                <div class="form-group">
                                    <!--<input class="form-control" placeholder="yourmail@example.com"  name="email" type="text">-->
                                    <input type="text" id="loginform-username" class="form-control" placeholder="yourmail@example.com"  name="LoginForm[username]" autofocus="" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <!--<input class="form-control" placeholder="Password" name="password" type="password" value="">-->
                                    <input type="password" id="loginform-password" placeholder="Password" class="form-control" name="LoginForm[password]" aria-required="true">
                                </div>
                                <div class="checkbox">
                                    <!--<label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Ricordami
                                    </label>-->
                                    <label for="loginform-rememberme">
                                        <input type="hidden" name="LoginForm[rememberMe]" value="0"><input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="">
                                        Ricordami &nbsp;&nbsp;
                                        <a href="<?php echo Yii::$app->homeUrl; ?>acquista/acquistaregister" style="text-decoration: underline;">Registrati</a>
                                    </label>
                                </div>
                                <input class="btn btn-lg btn-success btn-block" name="login-button" type="submit" value="Accesso">
                            </fieldset>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!--<p>Please fill out the following fields to login:</p>-->

    <!--<div class="row">
        <div class="col-lg-5">
            <?php /*$form = ActiveForm::begin(['id' => 'login-form']); */?>

                <?/*= $form->field($model, 'username')->textInput(['autofocus' => true]) */?>

                <?/*= $form->field($model, 'password')->passwordInput() */?>

                <?/*= $form->field($model, 'rememberMe')->checkbox() */?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?/*= Html::a('reset it', ['site/request-password-reset']) */?>.
                </div>

                <div class="form-group">
                    <?/*= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) */?>
                </div>

            <?php /*ActiveForm::end(); */?>
        </div>
    </div>-->
</div>
