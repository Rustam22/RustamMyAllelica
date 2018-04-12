<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserStatus */

$this->title = 'Create Join User Status';
$this->params['breadcrumbs'][] = ['label' => 'Join User Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-user-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
