<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Snp */

$this->title = $model->snp_primary_id;
$this->params['breadcrumbs'][] = ['label' => 'Snps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="snp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->snp_primary_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->snp_primary_id], [
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
            'snp_primary_id',
            'snp_id',
            'gene',
        ],
    ]) ?>

</div>
