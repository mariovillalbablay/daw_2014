<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Enlaces */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enlaces-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Enlace')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Imagen')->textInput() ?>

    <?= $form->field($model, 'Cod_evento')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
