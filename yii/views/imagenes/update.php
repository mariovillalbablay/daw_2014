<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Imagenes */

$this->title = 'Update Imagenes: ' . ' ' . $model->Codigo_imagen;
$this->params['breadcrumbs'][] = ['label' => 'Imagenes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Codigo_imagen, 'url' => ['view', 'id' => $model->Codigo_imagen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="imagenes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
