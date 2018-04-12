<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'first_name')->label('Nome') ?>

            <?= $form->field($model, 'last_name')->label('Cognome') ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Username') ?>

            <?= $form->field($model, 'email')->label('Email')->input('email') ?>

            <?= $form->field($model, 'password')->passwordInput()?>

            <?= $form->field($model, 'password_repeat')->passwordInput()->label('Ripeti la password')?>

            <?= $form->field($model, 'mobile')->label('Telefono') ?>

            <?= $form->field($model, 'address')->label('Indirizzo') ?>

            <?= $form->field($model, 'zip_code')->label('CAP') ?>

            <?= $form->field($model, 'city')->label('Citta') ?>

            <?= $form->field($model, 'note')->label('Come ci hai conosciuti?')->textarea() ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
