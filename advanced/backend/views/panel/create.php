<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Panel */

$this->title = 'Create Panel';
$this->params['breadcrumbs'][] = ['label' => 'Panels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
