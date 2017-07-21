<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Current */

$this->title = 'Update Current: ' . $model->current_id;
$this->params['breadcrumbs'][] = ['label' => 'Currents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->current_id, 'url' => ['view', 'id' => $model->current_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="current-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
