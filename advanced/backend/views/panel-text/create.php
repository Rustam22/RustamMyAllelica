<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PanelText */

$this->title = 'Create Panel Text';
$this->params['breadcrumbs'][] = ['label' => 'Panel Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel-text-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
