<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\Lugares;


class LugaresController extends Controller
{
	

    public function actionIndex()
	
    {
		//Con esto realizamos un select de toda la tabla lugares
		$query= Lugares::find();
		$pagination=new Pagination([
			'defaultPageSize'=>10,
			'totalCount'=> $query->count(),
			]);
		
		//Ordenamor por id
		$lugares = $query->orderBy('id_lugar')
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		
		//Lo mostraremos en el view index
        return $this->render('index',[
		'lugares'=>$lugares,
		'pagination' => $pagination,]);
    }


	
	

}
?>