<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PanelText */

$this->title = $model->panel_text_id;
$this->params['breadcrumbs'][] = ['label' => 'Panel Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel-text-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->panel_text_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->panel_text_id], [
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
            'panel_text_id',
            'panel_text_index',
            'lower_bound',
            'upper_bound',
            'special_text:ntext',
        ],
    ]) ?>

</div>
