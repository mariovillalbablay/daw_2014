<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre_usuario')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Contraseña')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Telefono_usuario')->textInput() ?>

    <?= $form->field($model, 'Email_usuario')->textInput(['maxlength' => 63]) ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => 127]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
