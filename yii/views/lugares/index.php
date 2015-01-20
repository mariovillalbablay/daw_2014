<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Lugares</h1>
<ul>

<?php foreach ($lugares as $lugar): ?>

	<li>
    	<?= Html::encode("{$lugar->id_lugar} ({$lugar->nombre})") ?>:
        <?= $lugar->descripcion ?>
	</li>
    
   <?php endforeach; ?>
   </ul>
   
   <?= LinkPager::widget(['pagination' => $pagination]) ?>