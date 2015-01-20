<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Dispositivos".
 *
 * @property string $Id_dispositivo
 *
 * @property DispositivosEventos[] $dispositivosEventos
 * @property Eventos[] $codEventos
 */
class Dispositivos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Dispositivos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_dispositivo'], 'required'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDispositivosEventos()
    {
        return $this->hasMany(DispositivosEventos::className(), ['Id_dispositivo' => 'Id_dispositivo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodEventos()
    {
        return $this->hasMany(Eventos::className(), ['Codigo_evento' => 'Cod_evento'])->viaTable('Dispositivos_Eventos', ['Id_dispositivo' => 'Id_dispositivo']);
    }
}
