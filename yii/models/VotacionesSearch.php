<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Votaciones;

/**
 * VotacionesSearch represents the model behind the search form about `app\models\Votaciones`.
 */
class VotacionesSearch extends Votaciones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo_votacion', 'Votos1', 'Votos2', 'Votos3', 'Votos4', 'Votos5', 'Cod_evento'], 'integer'],
            [['Pregunta', 'Respuesta1', 'Respuesta2', 'Respuesta3', 'Respuesta4', 'Respuesta5'], 'safe'],
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
        $query = Votaciones::find();

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
            'Codigo_votacion' => $this->Codigo_votacion,
            'Votos1' => $this->Votos1,
            'Votos2' => $this->Votos2,
            'Votos3' => $this->Votos3,
            'Votos4' => $this->Votos4,
            'Votos5' => $this->Votos5,
            'Cod_evento' => $this->Cod_evento,
        ]);

        $query->andFilterWhere(['like', 'Pregunta', $this->Pregunta])
            ->andFilterWhere(['like', 'Respuesta1', $this->Respuesta1])
            ->andFilterWhere(['like', 'Respuesta2', $this->Respuesta2])
            ->andFilterWhere(['like', 'Respuesta3', $this->Respuesta3])
            ->andFilterWhere(['like', 'Respuesta4', $this->Respuesta4])
            ->andFilterWhere(['like', 'Respuesta5', $this->Respuesta5]);

        return $dataProvider;
    }
}
