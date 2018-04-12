<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinPanelProduct */

$this->title = 'Update Join Panel Product: ' . $model->panel_product_id;
$this->params['breadcrumbs'][] = ['label' => 'Join Panel Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->panel_product_id, 'url' => ['view', 'id' => $model->panel_product_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="join-panel-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
