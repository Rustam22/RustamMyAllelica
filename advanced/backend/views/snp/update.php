<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Snp */

$this->title = 'Update Snp: ' . $model->snp_primary_id;
$this->params['breadcrumbs'][] = ['label' => 'Snps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->snp_primary_id, 'url' => ['view', 'id' => $model->snp_primary_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="snp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
