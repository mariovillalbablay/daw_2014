<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PonentesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ponentes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Codigo_ponente') ?>

    <?= $form->field($model, 'Nombre_ponente') ?>

    <?= $form->field($model, 'Info_ponente') ?>

    <?= $form->field($model, 'Email_ponente') ?>

    <?= $form->field($model, 'Foto') ?>

    <?php // echo $form->field($model, 'Cod_evento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
