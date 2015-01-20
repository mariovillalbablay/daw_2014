<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Actividades_Ponentes".
 *
 * @property string $Cod_actividad
 * @property string $Cod_ponente
 *
 * @property Actividades $codActividad
 * @property Ponentes $codPonente
 */
class Actividades_Ponentes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Actividades_Ponentes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cod_actividad', 'Cod_ponente'], 'required'],
            [['Cod_actividad', 'Cod_ponente'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Cod_actividad' => 'Cod Actividad',
            'Cod_ponente' => 'Cod Ponente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodActividad()
    {
        return $this->hasOne(Actividades::className(), ['Codigo_actividad' => 'Cod_actividad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodPonente()
    {
        return $this->hasOne(Ponentes::className(), ['Codigo_ponente' => 'Cod_ponente']);
    }
}
