<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Alertas".
 *
 * @property string $Codigo_alerta
 * @property string $Descripcion_alerta
 * @property string $Fecha_hora
 * @property string $Cod_evento
 *
 * @property Eventos $codEvento
 */
class Alertas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Alertas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Descripcion_alerta', 'Cod_evento'], 'required'],
            [['Fecha_hora'], 'safe'],
            [['Cod_evento'], 'integer'],
            [['Descripcion_alerta'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Codigo_alerta' => 'Codigo Alerta',
            'Descripcion_alerta' => 'Descripcion Alerta',
            'Fecha_hora' => 'Fecha Hora',
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
