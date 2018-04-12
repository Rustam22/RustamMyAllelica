<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserSnpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="join-user-snp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_snp_id') ?>

    <?= $form->field($model, 'user_index') ?>

    <?= $form->field($model, 'snp_index') ?>

    <?= $form->field($model, 'allele_1') ?>

    <?= $form->field($model, 'allele_2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
