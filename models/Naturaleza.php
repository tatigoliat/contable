<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "naturaleza".
 *
 * @property string $idnaturaleza
 * @property string $codigonaturaleza
 * @property string $descripcionnaturaleza
 */
class Naturaleza extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'naturaleza';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigonaturaleza', 'descripcionnaturaleza'], 'required'],
            [['codigonaturaleza'], 'string', 'max' => 2],
            [['descripcionnaturaleza'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idnaturaleza' => Yii::t('app', 'Idnaturaleza'),
            'codigonaturaleza' => Yii::t('app', 'Codigonaturaleza'),
            'descripcionnaturaleza' => Yii::t('app', 'Descripcionnaturaleza'),
        ];
    }
}
