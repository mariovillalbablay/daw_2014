<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Votaciones".
 *
 * @property string $Codigo_votacion
 * @property string $Pregunta
 * @property string $Respuesta1
 * @property string $Respuesta2
 * @property string $Respuesta3
 * @property string $Respuesta4
 * @property string $Respuesta5
 * @property string $Votos1
 * @property string $Votos2
 * @property string $Votos3
 * @property string $Votos4
 * @property string $Votos5
 * @property string $Cod_evento
 *
 * @property Eventos $codEvento
 */
class Votaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Votaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Pregunta', 'Respuesta1', 'Respuesta2', 'Votos1', 'Votos2', 'Cod_evento'], 'required'],
            [['Votos1', 'Votos2', 'Votos3', 'Votos4', 'Votos5', 'Cod_evento'], 'integer'],
            [['Pregunta', 'Respuesta1', 'Respuesta2', 'Respuesta3', 'Respuesta4', 'Respuesta5'], 'string', 'max' => 127]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Codigo_votacion' => 'Codigo Votacion',
            'Pregunta' => 'Pregunta',
            'Respuesta1' => 'Respuesta1',
            'Respuesta2' => 'Respuesta2',
            'Respuesta3' => 'Respuesta3',
            'Respuesta4' => 'Respuesta4',
            'Respuesta5' => 'Respuesta5',
            'Votos1' => 'Votos1',
            'Votos2' => 'Votos2',
            'Votos3' => 'Votos3',
            'Votos4' => 'Votos4',
            'Votos5' => 'Votos5',
            'Cod_evento' => 'Cod Evento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodEvento()
    {
        return $this->hasOne(Eventos::className(), ['Codigo_evento' => 'Cod_evento']);
    }
}
