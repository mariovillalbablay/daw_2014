<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lugares;

/**
 * LugaresSearch represents the model behind the search form about `app\models\Lugares`.
 */
class LugaresSearch extends Lugares
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo_lugar', 'Capacidad'], 'integer'],
            [['Nombre_lugar'], 'safe'],
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
        $query = Lugares::find();

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
            'Codigo_lugar' => $this->Codigo_lugar,
            'Capacidad' => $this->Capacidad,
        ]);

        $query->andFilterWhere(['like', 'Nombre_lugar', $this->Nombre_lugar]);

        return $dataProvider;
    }
}
