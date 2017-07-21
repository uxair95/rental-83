<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Current */

$this->title = $model->current_id;
$this->params['breadcrumbs'][] = ['label' => 'Currents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="current-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->current_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->current_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'current_id',
            'customer_name',
            'product_product_id',
            'days',
        ],
    ]) ?>

</div>
