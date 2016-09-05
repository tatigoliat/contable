<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuentacontable".
 *
 * @property string $idcuentac
 * @property string $codigocuentacontable
 * @property double $debe
 * @property integer $haber
 * @property integer $idempresa
 * @property integer $idplancuentacontable
 * @property integer $numhijos
 * @property double $saldo
 * @property double $saldoinicialdebe
 * @property double $saldoinicialhaber
 */
class Cuentacontable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuentacontable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigocuentacontable', 'debe', 'haber', 'idempresa', 'idplancuentacontable', 'numhijos', 'saldo', 'saldoinicialdebe', 'saldoinicialhaber'], 'required'],
            [['debe', 'saldo', 'saldoinicialdebe', 'saldoinicialhaber'], 'number'],
            [['haber', 'idempresa', 'idplancuentacontable', 'numhijos'], 'integer'],
            [['codigocuentacontable'], 'string', 'max' => 12]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcuentac' => Yii::t('app', 'Idcuentac'),
            'codigocuentacontable' => Yii::t('app', 'Codigocuentacontable'),
            'debe' => Yii::t('app', 'Debe'),
            'haber' => Yii::t('app', 'Haber'),
            'idempresa' => Yii::t('app', 'Idempresa'),
            'idplancuentacontable' => Yii::t('app', 'Idplancuentacontable'),
            'numhijos' => Yii::t('app', 'Numhijos'),
            'saldo' => Yii::t('app', 'Saldo'),
            'saldoinicialdebe' => Yii::t('app', 'Saldoinicialdebe'),
            'saldoinicialhaber' => Yii::t('app', 'Saldoinicialhaber'),
        ];
    }
}
