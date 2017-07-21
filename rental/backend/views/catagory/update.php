<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Catagory */

$this->title = 'Update Catagory: ' . $model->catagory_id;
$this->params['breadcrumbs'][] = ['label' => 'Catagories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->catagory_id, 'url' => ['view', 'id' => $model->catagory_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="catagory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
