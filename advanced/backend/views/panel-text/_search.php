<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PanelTextSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel-text-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'panel_text_id') ?>

    <?= $form->field($model, 'panel_text_index') ?>

    <?= $form->field($model, 'lower_bound') ?>

    <?= $form->field($model, 'upper_bound') ?>

    <?= $form->field($model, 'special_text') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
