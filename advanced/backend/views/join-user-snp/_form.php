<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserSnp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="join-user-snp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_index')->textInput() ?>

    <?= $form->field($model, 'snp_index')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allele_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allele_2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
