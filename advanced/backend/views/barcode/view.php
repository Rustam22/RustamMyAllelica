<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Barcode */

$this->title = $model->barcode_id;
$this->params['breadcrumbs'][] = ['label' => 'Barcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barcode-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->barcode_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->barcode_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'barcode_id',
            'code',
            'status',
        ],
    ]) ?>

</div>
