<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movimientocontable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimientocontable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fkempresa')->textInput()->label('Empresa'); ?>

    <?= $form->field($model, 'fecha')->textInput() ->label('Fecha'); ?>

    <?= $form->field($model, 'fknaturaleza')->textInput()->label('Naturaleza'); ?>

    <?= $form->field($model, 'fkcuentacontable')->textInput()->label('Cuenta Contable'); ?>

    <?= $form->field($model, 'mdebe')->textInput()->label('Monto por el Debe'); ?>

    <?= $form->field($model, 'mhaber')->textInput()->label('Monto por el Haber'); ?>

    <?= $form->field($model, 'reversado')->textInput()->label('Estatus (Reversado, No Reversado)'); ?>

    <?= $form->field($model, 'fechareverso')->textInput() ->label('Fecha de reverso');?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
