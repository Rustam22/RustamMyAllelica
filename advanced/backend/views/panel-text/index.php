<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PanelTextSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Panel Texts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel-text-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Panel Text', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'panel_text_id',
            'panel_text_index',
            'lower_bound',
            'upper_bound',
            'special_text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
