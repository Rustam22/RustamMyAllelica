<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinPanelSnpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="join-panel-snp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'panel_snp_id') ?>

    <?= $form->field($model, 'snp_index') ?>

    <?= $form->field($model, 'panel_index') ?>

    <?= $form->field($model, 'effective_allele') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
