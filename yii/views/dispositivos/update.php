<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dispositivos */

$this->title = 'Update Dispositivos: ' . ' ' . $model->Id_dispositivo;
$this->params['breadcrumbs'][] = ['label' => 'Dispositivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_dispositivo, 'url' => ['view', 'id' => $model->Id_dispositivo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dispositivos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
