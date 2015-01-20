<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alertas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alertas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Descripcion_alerta')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Fecha_hora')->textInput() ?>

    <?= $form->field($model, 'Cod_evento')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
