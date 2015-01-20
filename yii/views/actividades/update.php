<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Actividades */

$this->title = 'Update Actividades: ' . ' ' . $model->Codigo_actividad;
$this->params['breadcrumbs'][] = ['label' => 'Actividades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Codigo_actividad, 'url' => ['view', 'id' => $model->Codigo_actividad]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="actividades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
