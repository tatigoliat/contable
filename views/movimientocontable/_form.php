<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movimientocontable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimientocontable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'fechareverso')->textInput() ?>

    <?= $form->field($model, 'fkcuentacontable')->textInput() ?>

    <?= $form->field($model, 'fkempresa')->textInput() ?>

    <?= $form->field($model, 'mdebe')->textInput() ?>

    <?= $form->field($model, 'mhaber')->textInput() ?>

    <?= $form->field($model, 'fknaturaleza')->textInput() ?>

    <?= $form->field($model, 'reversado')->textInput() ?>

    <?= $form->field($model, 'concepto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
