<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VotacionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="votaciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Codigo_votacion') ?>

    <?= $form->field($model, 'Pregunta') ?>

    <?= $form->field($model, 'Respuesta1') ?>

    <?= $form->field($model, 'Respuesta2') ?>

    <?= $form->field($model, 'Respuesta3') ?>

    <?php // echo $form->field($model, 'Respuesta4') ?>

    <?php // echo $form->field($model, 'Respuesta5') ?>

    <?php // echo $form->field($model, 'Votos1') ?>

    <?php // echo $form->field($model, 'Votos2') ?>

    <?php // echo $form->field($model, 'Votos3') ?>

    <?php // echo $form->field($model, 'Votos4') ?>

    <?php // echo $form->field($model, 'Votos5') ?>

    <?php // echo $form->field($model, 'Cod_evento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
