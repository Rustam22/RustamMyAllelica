<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinPanelProduct */

$this->title = $model->panel_product_id;
$this->params['breadcrumbs'][] = ['label' => 'Join Panel Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-panel-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->panel_product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->panel_product_id], [
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
            'panel_product_id',
            'panel_index',
            'product_index',
        ],
    ]) ?>

</div>
