<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserPanel */

$this->title = 'Create Join User Panel';
$this->params['breadcrumbs'][] = ['label' => 'Join User Panels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-user-panel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
