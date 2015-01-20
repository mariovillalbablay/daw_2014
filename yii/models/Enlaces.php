<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Enlaces".
 *
 * @property string $Enlace
 * @property resource $Imagen
 * @property string $Cod_evento
 *
 * @property Eventos $codEvento
 */
class Enlaces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Enlaces';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Enlace', 'Imagen', 'Cod_evento'], 'required'],
            [['Imagen'], 'string'],
            [['Cod_evento'], 'integer'],
            [['Enlace'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Enlace' => 'Enlace',
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
