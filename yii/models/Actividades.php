<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Actividades".
 *
 * @property string $Codigo_actividad
 * @property string $Nombre_actividad
 * @property string $Descripcion_actividad
 * @property string $Fecha
 * @property string $Hora_inicio
 * @property string $Hora_fin
 * @property resource $Imagen
 * @property string $Cod_evento
 * @property string $Cod_lugar
 *
 * @property Eventos $codEvento
 * @property Lugares $codLugar
 * @property ActividadesPonentes[] $actividadesPonentes
 * @property Ponentes[] $codPonentes
 */
class Actividades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Actividades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre_actividad', 'Descripcion_actividad', 'Fecha', 'Hora_inicio', 'Hora_fin', 'Cod_evento', 'Cod_lugar'], 'required'],
            [['Fecha', 'Hora_inicio', 'Hora_fin'], 'safe'],
            [['Imagen'], 'string'],
            [['Cod_evento', 'Cod_lugar'], 'integer'],
            [['Nombre_actividad'], 'string', 'max' => 63],
            [['Descripcion_actividad'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Codigo_actividad' => 'Codigo Actividad',
            'Nombre_actividad' => 'Nombre Actividad',
            'Descripcion_actividad' => 'Descripcion Actividad',
            'Fecha' => 'Fecha',
            'Hora_inicio' => 'Hora Inicio',
            'Hora_fin' => 'Hora Fin',
            'Imagen' => 'Imagen',
            'Cod_evento' => 'Cod Evento',
            'Cod_lugar' => 'Cod Lugar',
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
    public function getCodLugar()
    {
        return $this->hasOne(Lugares::className(), ['Codigo_lugar' => 'Cod_lugar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividadesPonentes()
    {
        return $this->hasMany(ActividadesPonentes::className(), ['Cod_actividad' => 'Codigo_actividad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodPonentes()
    {
        return $this->hasMany(Ponentes::className(), ['Codigo_ponente' => 'Cod_ponente'])->viaTable('Actividades_Ponentes', ['Cod_actividad' => 'Codigo_actividad']);
    }
}
