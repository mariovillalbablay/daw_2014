<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Videos".
 *
 * @property string $Codigo_video
 * @property string $Titulo_video
 * @property string $Enlace
 * @property string $Cod_evento
 *
 * @property Eventos $codEvento
 */
class Videos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Videos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Titulo_video', 'Enlace', 'Cod_evento'], 'required'],
            [['Cod_evento'], 'integer'],
            [['Titulo_video'], 'string', 'max' => 45],
            [['Enlace'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Codigo_video' => 'Codigo Video',
            'Titulo_video' => 'Titulo Video',
            'Enlace' => 'Enlace',
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
