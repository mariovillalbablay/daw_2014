<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dispositivos_Eventos */

$this->title = $model->Id_dispositivo;
$this->params['breadcrumbs'][] = ['label' => 'Dispositivos  Eventos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dispositivos--eventos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_dispositivo' => $model->Id_dispositivo, 'Cod_evento' => $model->Cod_evento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_dispositivo' => $model->Id_dispositivo, 'Cod_evento' => $model->Cod_evento], [
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
            'Id_dispositivo',
            'Cod_evento',
        ],
    ]) ?>

</div>
