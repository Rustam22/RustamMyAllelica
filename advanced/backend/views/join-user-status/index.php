<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JoinUserStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Join User Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-user-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Join User Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_status_id',
            'user_index',
            'status_index',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
