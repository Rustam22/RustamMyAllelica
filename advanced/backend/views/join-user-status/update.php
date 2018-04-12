<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserStatus */

$this->title = 'Update Join User Status: ' . $model->user_status_id;
$this->params['breadcrumbs'][] = ['label' => 'Join User Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_status_id, 'url' => ['view', 'id' => $model->user_status_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="join-user-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
