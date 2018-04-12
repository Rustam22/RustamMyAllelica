<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="join-user-product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_index')->textInput() ?>

    <?= $form->field($model, 'product_index')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
