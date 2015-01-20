<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Enlaces */

$this->title = 'Update Enlaces: ' . ' ' . $model->Enlace;
$this->params['breadcrumbs'][] = ['label' => 'Enlaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Enlace, 'url' => ['view', 'id' => $model->Enlace]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enlaces-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
