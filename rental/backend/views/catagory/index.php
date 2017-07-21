<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CatagorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Catagories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catagory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Catagory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'catagory_id',
            'catagory_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
