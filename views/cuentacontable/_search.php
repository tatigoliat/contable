<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CuentacontableSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuentacontable-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcuentac') ?>

    <?= $form->field($model, 'codigocuentacontable') ?>

    <?= $form->field($model, 'descripcioncuenta') ?>

    <?= $form->field($model, 'debe') ?>

    <?= $form->field($model, 'haber') ?>

    <?php // echo $form->field($model, 'idempresa') ?>

    <?php // echo $form->field($model, 'idplancuentacontable') ?>

    <?php // echo $form->field($model, 'numhijos') ?>

    <?php // echo $form->field($model, 'saldo') ?>

    <?php // echo $form->field($model, 'saldoinicialdebe') ?>

    <?php // echo $form->field($model, 'saldoinicialhaber') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
