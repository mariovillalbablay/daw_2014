<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ponentes".
 *
 * @property string $Codigo_ponente
 * @property string $Nombre_ponente
 * @property string $Info_ponente
 * @property string $Email_ponente
 * @property resource $Foto
 * @property string $Cod_evento
 *
 * @property ActividadesPonentes[] $actividadesPonentes
 * @property Actividades[] $codActividads
 * @property Eventos $codEvento
 */
class Ponentes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Ponentes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre_ponente', 'Cod_evento'], 'required'],
            [['Foto'], 'string'],
            [['Cod_evento'], 'integer'],
            [['Nombre_ponente', 'Email_ponente'], 'string', 'max' => 63],
            [['Info_ponente'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Codigo_ponente' => 'Codigo Ponente',
            'Nombre_ponente' => 'Nombre Ponente',
            'Info_ponente' => 'Info Ponente',
            'Email_ponente' => 'Email Ponente',
            'Foto' => 'Foto',
            'Cod_evento' => 'Cod Evento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividadesPonentes()
    {
        return $this->hasMany(ActividadesPonentes::className(), ['Cod_ponente' => 'Codigo_ponente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodActividads()
    {
        return $this->hasMany(Actividades::className(), ['Codigo_actividad' => 'Cod_actividad'])->viaTable('Actividades_Ponentes', ['Cod_ponente' => 'Codigo_ponente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodEvento()
    {
        return $this->hasOne(Eventos::className(), ['Codigo_evento' => 'Cod_evento']);
    }
}
