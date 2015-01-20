<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Enlaces;

/**
 * EnlacesSearch represents the model behind the search form about `app\models\Enlaces`.
 */
class EnlacesSearch extends Enlaces
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Enlace', 'Imagen'], 'safe'],
            [['Cod_evento'], 'integer'],
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
        $query = Enlaces::find();

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
            'Cod_evento' => $this->Cod_evento,
        ]);

        $query->andFilterWhere(['like', 'Enlace', $this->Enlace])
            ->andFilterWhere(['like', 'Imagen', $this->Imagen]);

        return $dataProvider;
    }
}
