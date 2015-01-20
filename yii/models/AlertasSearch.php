<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alertas;

/**
 * AlertasSearch represents the model behind the search form about `app\models\Alertas`.
 */
class AlertasSearch extends Alertas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo_alerta', 'Cod_evento'], 'integer'],
            [['Descripcion_alerta', 'Fecha_hora'], 'safe'],
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
        $query = Alertas::find();

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
            'Codigo_alerta' => $this->Codigo_alerta,
            'Fecha_hora' => $this->Fecha_hora,
            'Cod_evento' => $this->Cod_evento,
        ]);

        $query->andFilterWhere(['like', 'Descripcion_alerta', $this->Descripcion_alerta]);

        return $dataProvider;
    }
}
