<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lugares */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lugares-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Codigo_lugar')->textInput() ?>

    <?= $form->field($model, 'Nombre_lugar')->textInput(['maxlength' => 63]) ?>

    <?= $form->field($model, 'Capacidad')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
