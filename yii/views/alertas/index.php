<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlertasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alertas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alertas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Alertas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Codigo_alerta',
            'Descripcion_alerta',
            'Fecha_hora',
            'Cod_evento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
