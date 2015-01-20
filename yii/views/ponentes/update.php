<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ponentes */

$this->title = 'Update Ponentes: ' . ' ' . $model->Codigo_ponente;
$this->params['breadcrumbs'][] = ['label' => 'Ponentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Codigo_ponente, 'url' => ['view', 'id' => $model->Codigo_ponente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ponentes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
