<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Votaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="votaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Pregunta')->textInput(['maxlength' => 127]) ?>

    <?= $form->field($model, 'Respuesta1')->textInput(['maxlength' => 127]) ?>

    <?= $form->field($model, 'Respuesta2')->textInput(['maxlength' => 127]) ?>

    <?= $form->field($model, 'Respuesta3')->textInput(['maxlength' => 127]) ?>

    <?= $form->field($model, 'Respuesta4')->textInput(['maxlength' => 127]) ?>

    <?= $form->field($model, 'Respuesta5')->textInput(['maxlength' => 127]) ?>

    <?= $form->field($model, 'Votos1')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Votos2')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Votos3')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Votos4')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Votos5')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Cod_evento')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
