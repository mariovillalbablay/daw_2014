<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DispositivosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dispositivos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dispositivos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dispositivos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_dispositivo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
