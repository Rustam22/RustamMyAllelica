<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SnpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Snps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="snp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Snp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'snp_primary_id',
            'snp_id',
            'gene',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
