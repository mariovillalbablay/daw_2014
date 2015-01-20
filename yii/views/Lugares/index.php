<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LugaresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lugares';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lugares-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lugares', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Codigo_lugar',
            'Nombre_lugar',
            'Capacidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
