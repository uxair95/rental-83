<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Catagory */

$this->title = $model->catagory_id;
$this->params['breadcrumbs'][] = ['label' => 'Catagories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catagory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->catagory_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->catagory_id], [
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
            'catagory_id',
            'catagory_name',
        ],
    ]) ?>

</div>
