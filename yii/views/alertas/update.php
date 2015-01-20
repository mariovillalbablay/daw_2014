<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alertas */

$this->title = 'Update Alertas: ' . ' ' . $model->Codigo_alerta;
$this->params['breadcrumbs'][] = ['label' => 'Alertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Codigo_alerta, 'url' => ['view', 'id' => $model->Codigo_alerta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alertas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
