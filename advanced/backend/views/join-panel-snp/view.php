<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinPanelSnp */

$this->title = $model->panel_snp_id;
$this->params['breadcrumbs'][] = ['label' => 'Join Panel Snps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-panel-snp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->panel_snp_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->panel_snp_id], [
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
            'panel_snp_id',
            'snp_index',
            'panel_index',
            'effective_allele',
        ],
    ]) ?>

</div>
