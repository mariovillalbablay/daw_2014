<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Votaciones */

$this->title = 'Update Votaciones: ' . ' ' . $model->Codigo_votacion;
$this->params['breadcrumbs'][] = ['label' => 'Votaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Codigo_votacion, 'url' => ['view', 'id' => $model->Codigo_votacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="votaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
