<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dispositivos_Eventos */

$this->title = 'Update Dispositivos  Eventos: ' . ' ' . $model->Id_dispositivo;
$this->params['breadcrumbs'][] = ['label' => 'Dispositivos  Eventos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_dispositivo, 'url' => ['view', 'Id_dispositivo' => $model->Id_dispositivo, 'Cod_evento' => $model->Cod_evento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dispositivos--eventos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
