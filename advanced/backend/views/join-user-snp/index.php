<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JoinUserSnpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Join User Snps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-user-snp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Join User Snp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_snp_id',
            'user_index',
            'snp_index',
            'allele_1',
            'allele_2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
