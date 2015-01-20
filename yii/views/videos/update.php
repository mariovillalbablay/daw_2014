<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Videos */

$this->title = 'Update Videos: ' . ' ' . $model->Codigo_video;
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Codigo_video, 'url' => ['view', 'id' => $model->Codigo_video]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="videos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
