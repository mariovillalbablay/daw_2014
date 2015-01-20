<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Lugares".
 *
 * @property string $Codigo_lugar
 * @property string $Nombre_lugar
 * @property string $Capacidad
 *
 * @property Actividades[] $actividades
 */
class Lugares extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Lugares';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre_lugar'], 'required'],
            [['Capacidad'], 'integer'],
            [['Nombre_lugar'], 'string', 'max' => 63]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Codigo_lugar' => 'Codigo Lugar',
            'Nombre_lugar' => 'Nombre Lugar',
            'Capacidad' => 'Capacidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividades()
    {
        return $this->hasMany(Actividades::className(), ['Cod_lugar' => 'Codigo_lugar']);
    }
}
