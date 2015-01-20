<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Actividades;

/**
 * ActividadesSearch represents the model behind the search form about `app\models\Actividades`.
 */
class ActividadesSearch extends Actividades
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo_actividad', 'Cod_evento', 'Cod_lugar'], 'integer'],
            [['Nombre_actividad', 'Descripcion_actividad', 'Fecha', 'Hora_inicio', 'Hora_fin', 'Imagen'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Actividades::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Codigo_actividad' => $this->Codigo_actividad,
            'Fecha' => $this->Fecha,
            'Hora_inicio' => $this->Hora_inicio,
            'Hora_fin' => $this->Hora_fin,
            'Cod_evento' => $this->Cod_evento,
            'Cod_lugar' => $this->Cod_lugar,
        ]);

        $query->andFilterWhere(['like', 'Nombre_actividad', $this->Nombre_actividad])
            ->andFilterWhere(['like', 'Descripcion_actividad', $this->Descripcion_actividad])
            ->andFilterWhere(['like', 'Imagen', $this->Imagen]);

        return $dataProvider;
    }
}
