<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinPanelSnp */

$this->title = 'Update Join Panel Snp: ' . $model->panel_snp_id;
$this->params['breadcrumbs'][] = ['label' => 'Join Panel Snps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->panel_snp_id, 'url' => ['view', 'id' => $model->panel_snp_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="join-panel-snp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
