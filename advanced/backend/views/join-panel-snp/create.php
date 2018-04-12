<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\JoinPanelSnp */

$this->title = 'Create Join Panel Snp';
$this->params['breadcrumbs'][] = ['label' => 'Join Panel Snps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-panel-snp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
