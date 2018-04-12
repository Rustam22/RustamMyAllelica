<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserBarcode */

$this->title = 'Update Join User Barcode: ' . $model->user_barcode_id;
$this->params['breadcrumbs'][] = ['label' => 'Join User Barcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_barcode_id, 'url' => ['view', 'id' => $model->user_barcode_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="join-user-barcode-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
