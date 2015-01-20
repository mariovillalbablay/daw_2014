<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Votaciones */

$this->title = $model->Codigo_votacion;
$this->params['breadcrumbs'][] = ['label' => 'Votaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="votaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Codigo_votacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Codigo_votacion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Codigo_votacion',
            'Pregunta',
            'Respuesta1',
            'Respuesta2',
            'Respuesta3',
            'Respuesta4',
            'Respuesta5',
            'Votos1',
            'Votos2',
            'Votos3',
            'Votos4',
            'Votos5',
            'Cod_evento',
        ],
    ]) ?>

</div>
