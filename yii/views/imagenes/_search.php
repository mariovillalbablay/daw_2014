<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImagenesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imagenes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Codigo_imagen') ?>

    <?= $form->field($model, 'Titulo_imagen') ?>

    <?= $form->field($model, 'Imagen') ?>

    <?= $form->field($model, 'Cod_evento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
