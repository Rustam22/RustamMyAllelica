<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JoinUserProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Join User Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-user-product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Join User Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_product_id',
            'user_index',
            'product_index',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
