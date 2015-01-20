<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VotacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Votaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="votaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Votaciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Codigo_votacion',
            'Pregunta',
            'Respuesta1',
            'Respuesta2',
            'Respuesta3',
            // 'Respuesta4',
            // 'Respuesta5',
            // 'Votos1',
            // 'Votos2',
            // 'Votos3',
            // 'Votos4',
            // 'Votos5',
            // 'Cod_evento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
