<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Barcode */

$this->title = 'Update Barcode: ' . $model->barcode_id;
$this->params['breadcrumbs'][] = ['label' => 'Barcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->barcode_id, 'url' => ['view', 'id' => $model->barcode_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barcode-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
