<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserProduct */

$this->title = 'Update Join User Product: ' . $model->user_product_id;
$this->params['breadcrumbs'][] = ['label' => 'Join User Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_product_id, 'url' => ['view', 'id' => $model->user_product_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="join-user-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
