<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinPanelSnp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="join-panel-snp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'snp_index')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'panel_index')->textInput() ?>

    <?= $form->field($model, 'effective_allele')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
