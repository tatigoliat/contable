<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovimientocontableSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimientocontable-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idmovimientocontable') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'fechareverso') ?>

    <?= $form->field($model, 'fkcuentacontable') ?>

    <?= $form->field($model, 'fkempresa') ?>

    <?php // echo $form->field($model, 'mdebe') ?>

    <?php // echo $form->field($model, 'mhaber') ?>

    <?php // echo $form->field($model, 'fknaturaleza') ?>

    <?php // echo $form->field($model, 'reversado') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
