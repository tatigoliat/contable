<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Plancuenta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plancuenta-form">

    <?php $form = ActiveForm::begin(); ?>

  <?php
        $Naturaleza= ArrayHelper::map(\app\models\Naturaleza::find()->all(), 'idnaturaleza', 'descripcionnaturaleza');
        echo $form->field($model, 'fknaturaleza')->dropDownList($Naturaleza,
        [
            'prompt'=>'Porfavor elija una',
        ]
        )->label('Naturaleza');

    ?>

    <?= $form->field($model, 'codigocuenta')->textInput(['maxlength' => true])->label('Codigo Contable'); ?>

    <?= $form->field($model, 'descripcionplancuenta')->textInput(['maxlength' => true])->label('Descripcion'); ?>

    <?= $form->field($model, 'fkempresa')->textInput()->label('Empresa'); ?>

    <?= $form->field($model, 'tipopago')->textInput() ?>

    <?= $form->field($model, 'tiporecurso')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
