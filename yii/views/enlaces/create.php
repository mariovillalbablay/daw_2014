<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Enlaces */

$this->title = 'Create Enlaces';
$this->params['breadcrumbs'][] = ['label' => 'Enlaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enlaces-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
