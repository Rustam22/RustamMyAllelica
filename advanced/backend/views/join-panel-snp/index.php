<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JoinPanelSnpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Join Panel Snps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-panel-snp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Join Panel Snp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'panel_snp_id',
            'snp_index',
            'panel_index',
            'effective_allele',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
