<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActividadesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actividades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Codigo_actividad') ?>

    <?= $form->field($model, 'Nombre_actividad') ?>

    <?= $form->field($model, 'Descripcion_actividad') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'Hora_inicio') ?>

    <?php // echo $form->field($model, 'Hora_fin') ?>

    <?php // echo $form->field($model, 'Imagen') ?>

    <?php // echo $form->field($model, 'Cod_evento') ?>

    <?php // echo $form->field($model, 'Cod_lugar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
