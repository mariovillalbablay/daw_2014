<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Imagenes;

/**
 * ImagenesSearch represents the model behind the search form about `app\models\Imagenes`.
 */
class ImagenesSearch extends Imagenes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo_imagen', 'Cod_evento'], 'integer'],
            [['Titulo_imagen', 'Imagen'], 'safe'],
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
        $query = Imagenes::find();

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
            'Codigo_imagen' => $this->Codigo_imagen,
            'Cod_evento' => $this->Cod_evento,
        ]);

        $query->andFilterWhere(['like', 'Titulo_imagen', $this->Titulo_imagen])
            ->andFilterWhere(['like', 'Imagen', $this->Imagen]);

        return $dataProvider;
    }
}
