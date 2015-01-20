<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Dispositivos_Eventos".
 *
 * @property string $Id_dispositivo
 * @property string $Cod_evento
 *
 * @property Eventos $codEvento
 * @property Dispositivos $idDispositivo
 */
class Dispositivos_Eventos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Dispositivos_Eventos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_dispositivo', 'Cod_evento'], 'required'],
            [['Cod_evento'], 'integer'],
            [['Id_dispositivo'], 'string', 'max' => 63]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_dispositivo' => 'Id Dispositivo',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDispositivo()
    {
        return $this->hasOne(Dispositivos::className(), ['Id_dispositivo' => 'Id_dispositivo']);
    }
}
