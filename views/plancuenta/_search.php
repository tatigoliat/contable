<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlancuentaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plancuenta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pkplancuenta') ?>

    <?= $form->field($model, 'descripcionplancuenta') ?>

    <?= $form->field($model, 'fkempresa') ?>

    <?= $form->field($model, 'fknaturaleza') ?>

    <?= $form->field($model, 'codigocuenta') ?>

    <?php // echo $form->field($model, 'tipopago') ?>

    <?php // echo $form->field($model, 'tiporecurso') ?>

    <?php // echo $form->field($model, 'espadre') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
