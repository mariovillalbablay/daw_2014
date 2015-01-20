<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ponentes;

/**
 * PonentesSearch represents the model behind the search form about `app\models\Ponentes`.
 */
class PonentesSearch extends Ponentes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codigo_ponente', 'Cod_evento'], 'integer'],
            [['Nombre_ponente', 'Info_ponente', 'Email_ponente', 'Foto'], 'safe'],
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
        $query = Ponentes::find();

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
            'Codigo_ponente' => $this->Codigo_ponente,
            'Cod_evento' => $this->Cod_evento,
        ]);

        $query->andFilterWhere(['like', 'Nombre_ponente', $this->Nombre_ponente])
            ->andFilterWhere(['like', 'Info_ponente', $this->Info_ponente])
            ->andFilterWhere(['like', 'Email_ponente', $this->Email_ponente])
            ->andFilterWhere(['like', 'Foto', $this->Foto]);

        return $dataProvider;
    }
}
