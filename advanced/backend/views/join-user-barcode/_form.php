<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserBarcode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="join-user-barcode-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_index')->textInput() ?>

    <?= $form->field($model, 'barcode_index')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
