<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\User;
use backend\models\Status;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="join-user-status-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'user_index')->dropDownList(
            ArrayHelper::map(User::find()->all(),'id','username'),
            ['Promt' => 'Select Company']
    ) ?>

    <?= $form->field($model, 'status_index')->dropDownList(
        ArrayHelper::map(Status::find()->all(),'status_id','position'),
        ['Promt' => 'Select Position']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
