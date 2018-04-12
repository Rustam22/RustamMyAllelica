<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinUserSnp */

$this->title = 'Update Join User Snp: ' . $model->user_snp_id;
$this->params['breadcrumbs'][] = ['label' => 'Join User Snps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_snp_id, 'url' => ['view', 'id' => $model->user_snp_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="join-user-snp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
