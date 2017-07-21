<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Catagory;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'catagory_catagory_id')->dropDownList(
   ArrayHelper::map(Catagory::find()->all(),'catagory_id','catagory_name'),['prompt'=>'Select Package']
   ) ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_cost')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
