<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserProduct */

$this->title = $model->user_product_id;
$this->params['breadcrumbs'][] = ['label' => 'Join User Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-user-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->user_product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->user_product_id], [
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
            'user_product_id',
            'user_index',
            'product_index',
        ],
    ]) ?>

</div>
