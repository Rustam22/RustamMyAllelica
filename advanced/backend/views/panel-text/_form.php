<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PanelText */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel-text-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'panel_text_index')->textInput() ?>

    <?= $form->field($model, 'lower_bound')->textInput() ?>

    <?= $form->field($model, 'upper_bound')->textInput() ?>

    <?= $form->field($model, 'special_text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
