<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PanelText */

$this->title = 'Update Panel Text: ' . $model->panel_text_id;
$this->params['breadcrumbs'][] = ['label' => 'Panel Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->panel_text_id, 'url' => ['view', 'id' => $model->panel_text_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel-text-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
