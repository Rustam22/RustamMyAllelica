<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Snp */

$this->title = 'Create Snp';
$this->params['breadcrumbs'][] = ['label' => 'Snps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="snp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
