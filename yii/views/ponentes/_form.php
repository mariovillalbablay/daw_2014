<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ponentes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ponentes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre_ponente')->textInput(['maxlength' => 63]) ?>

    <?= $form->field($model, 'Info_ponente')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Email_ponente')->textInput(['maxlength' => 63]) ?>

    <?= $form->field($model, 'Foto')->textInput() ?>

    <?= $form->field($model, 'Cod_evento')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
