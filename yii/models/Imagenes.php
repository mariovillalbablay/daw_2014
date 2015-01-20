<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Imagenes".
 *
 * @property string $Codigo_imagen
 * @property string $Titulo_imagen
 * @property resource $Imagen
 * @property string $Cod_evento
 *
 * @property Eventos $codEvento
 */
class Imagenes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Imagenes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Titulo_imagen', 'Imagen', 'Cod_evento'], 'required'],
            [['Imagen'], 'string'],
            [['Cod_evento'], 'integer'],
            [['Titulo_imagen'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Codigo_imagen' => 'Codigo Imagen',
            'Titulo_imagen' => 'Titulo Imagen',
            'Imagen' => 'Imagen',
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
