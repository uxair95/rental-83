<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CurrentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="current-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'current_id') ?>

    <?= $form->field($model, 'customer_name') ?>

    <?= $form->field($model, 'product_product_id') ?>

    <?= $form->field($model, 'days') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
