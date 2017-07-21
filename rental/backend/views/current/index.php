<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CurrentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Currents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="current-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Current', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'current_id',
            'customer_name',
            'product_product_id',
            'days',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
