<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property string $codigoempresa
 * @property integer $cedulaempresa
 * @property string $nombreempresa
 * @property string $nombresresponsable
 * @property string $apellidosresponsable
 * @property string $rifempresa
 * @property string $telefono
 * @property string $correoempresa
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedulaempresa', 'nombreempresa', 'nombresresponsable', 'apellidosresponsable', 'rifempresa', 'telefono', 'correoempresa'], 'required'],
            [['cedulaempresa'], 'integer'],
            [['nombreempresa', 'nombresresponsable', 'apellidosresponsable', 'rifempresa', 'correoempresa'], 'string', 'max' => 120],
            [['telefono'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigoempresa' => Yii::t('app', 'Codigoempresa'),
            'cedulaempresa' => Yii::t('app', 'Cedulaempresa'),
            'nombreempresa' => Yii::t('app', 'Nombreempresa'),
            'nombresresponsable' => Yii::t('app', 'Nombresresponsable'),
            'apellidosresponsable' => Yii::t('app', 'Apellidosresponsable'),
            'rifempresa' => Yii::t('app', 'Rifempresa'),
            'telefono' => Yii::t('app', 'Telefono'),
            'correoempresa' => Yii::t('app', 'Correoempresa'),
        ];
    }
}
