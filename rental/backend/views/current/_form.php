<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Product;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Current */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="current-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'product_product_id')->dropDownList(
   ArrayHelper::map(Product::find()->all(),'product_id','product_name'),['prompt'=>'Select Product']
   ) ?>
    <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'days')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
