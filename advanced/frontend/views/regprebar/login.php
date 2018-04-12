<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 24.01.18
 * Time: 13:07
 */

/* @var $this \yii\web\View */
/* @var $content string */


/*$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;*/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Barcode Control';
$this->params['breadcrumbs'][] = $this->title;

?>




<!--<h1><?/*= $info */?></h1>-->


<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please write your barcode here below:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'barcode')->label('Barcode') ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>