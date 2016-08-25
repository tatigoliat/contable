<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plancuenta".
 *
 * @property string $pkplancuenta
 * @property string $descripcionplancuenta
 * @property integer $fkempresa
 * @property integer $fknaturaleza
 * @property string $codigocuenta
 * @property integer $tipopago
 * @property integer $tiporecurso
 */
class Plancuenta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plancuenta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcionplancuenta', 'fkempresa', 'fknaturaleza', 'codigocuenta', 'tipopago', 'tiporecurso'], 'required'],
            [['fkempresa', 'fknaturaleza', 'tipopago', 'tiporecurso'], 'integer'],
            [['descripcionplancuenta'], 'string', 'max' => 120],
            [['codigocuenta'], 'string', 'max' => 12]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pkplancuenta' => Yii::t('app', 'Pkplancuenta'),
            'descripcionplancuenta' => Yii::t('app', 'Descripcionplancuenta'),
            'fkempresa' => Yii::t('app', 'Fkempresa'),
            'fknaturaleza' => Yii::t('app', 'Fknaturaleza'),
            'codigocuenta' => Yii::t('app', 'Codigocuenta'),
            'tipopago' => Yii::t('app', 'Tipopago'),
            'tiporecurso' => Yii::t('app', 'Tiporecurso'),
        ];
    }
}
