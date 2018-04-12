<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserPanel */

$this->title = 'Update Join User Panel: ' . $model->user_panel_id;
$this->params['breadcrumbs'][] = ['label' => 'Join User Panels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_panel_id, 'url' => ['view', 'id' => $model->user_panel_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="join-user-panel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
