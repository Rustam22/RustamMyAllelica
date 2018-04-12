<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\JoinPanelProduct */

$this->title = 'Create Join Panel Product';
$this->params['breadcrumbs'][] = ['label' => 'Join Panel Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-panel-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
