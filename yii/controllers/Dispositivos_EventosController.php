<?php

namespace app\controllers;

use Yii;
use app\models\Dispositivos_Eventos;
use app\models\Dispositivos_EventosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Dispositivos_EventosController implements the CRUD actions for Dispositivos_Eventos model.
 */
class Dispositivos_EventosController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Dispositivos_Eventos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Dispositivos_EventosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dispositivos_Eventos model.
     * @param string $Id_dispositivo
     * @param string $Cod_evento
     * @return mixed
     */
    public function actionView($Id_dispositivo, $Cod_evento)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_dispositivo, $Cod_evento),
        ]);
    }

    /**
     * Creates a new Dispositivos_Eventos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dispositivos_Eventos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_dispositivo' => $model->Id_dispositivo, 'Cod_evento' => $model->Cod_evento]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Dispositivos_Eventos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Id_dispositivo
     * @param string $Cod_evento
     * @return mixed
     */
    public function actionUpdate($Id_dispositivo, $Cod_evento)
    {
        $model = $this->findModel($Id_dispositivo, $Cod_evento);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_dispositivo' => $model->Id_dispositivo, 'Cod_evento' => $model->Cod_evento]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Dispositivos_Eventos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Id_dispositivo
     * @param string $Cod_evento
     * @return mixed
     */
    public function actionDelete($Id_dispositivo, $Cod_evento)
    {
        $this->findModel($Id_dispositivo, $Cod_evento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dispositivos_Eventos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Id_dispositivo
     * @param string $Cod_evento
     * @return Dispositivos_Eventos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_dispositivo, $Cod_evento)
    {
        if (($model = Dispositivos_Eventos::findOne(['Id_dispositivo' => $Id_dispositivo, 'Cod_evento' => $Cod_evento])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
