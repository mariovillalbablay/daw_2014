<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ponentes */

$this->title = $model->Codigo_ponente;
$this->params['breadcrumbs'][] = ['label' => 'Ponentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ponentes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Codigo_ponente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Codigo_ponente], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Codigo_ponente',
            'Nombre_ponente',
            'Info_ponente',
            'Email_ponente:email',
            'Foto',
            'Cod_evento',
        ],
    ]) ?>

</div>
