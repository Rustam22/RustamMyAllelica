<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserProduct */

$this->title = 'Create Join User Product';
$this->params['breadcrumbs'][] = ['label' => 'Join User Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="join-user-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
