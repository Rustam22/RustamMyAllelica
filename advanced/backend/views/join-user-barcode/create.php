<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserBarcode */

$this->title = 'Create Join User Barcode';
$this->params['breadcrumbs'][] = ['label' => 'Join User Barcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-user-barcode-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
