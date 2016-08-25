<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movimientocontable".
 *
 * @property string $idmovimientocontable
 * @property string $fecha
 * @property string $fechareverso
 * @property integer $fkcuentacontable
 * @property integer $fkempresa
 * @property double $mdebe
 * @property double $mhaber
 * @property integer $fknaturaleza
 * @property integer $reversado
 */
class Movimientocontable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'movimientocontable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha', 'fechareverso', 'fkcuentacontable', 'fkempresa', 'mdebe', 'mhaber', 'fknaturaleza', 'reversado'], 'required'],
            [['fecha', 'fechareverso'], 'safe'],
            [['fkcuentacontable', 'fkempresa', 'fknaturaleza', 'reversado'], 'integer'],
            [['mdebe', 'mhaber'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idmovimientocontable' => Yii::t('app', 'Idmovimientocontable'),
            'fecha' => Yii::t('app', 'Fecha'),
            'fechareverso' => Yii::t('app', 'Fechareverso'),
            'fkcuentacontable' => Yii::t('app', 'Fkcuentacontable'),
            'fkempresa' => Yii::t('app', 'Fkempresa'),
            'mdebe' => Yii::t('app', 'Mdebe'),
            'mhaber' => Yii::t('app', 'Mhaber'),
            'fknaturaleza' => Yii::t('app', 'Fknaturaleza'),
            'reversado' => Yii::t('app', 'Reversado'),
        ];
    }
}
