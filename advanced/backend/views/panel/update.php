<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Panel */

$this->title = 'Update Panel: ' . $model->panel_id;
$this->params['breadcrumbs'][] = ['label' => 'Panels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->panel_id, 'url' => ['view', 'id' => $model->panel_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
