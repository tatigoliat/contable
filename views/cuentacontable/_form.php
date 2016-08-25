<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cuentacontable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuentacontable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigocuentacontable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'debe')->textInput() ?>

    <?= $form->field($model, 'haber')->textInput() ?>

    <?= $form->field($model, 'idempresa')->textInput() ?>

    <?= $form->field($model, 'idplancuentacontable')->textInput() ?>

    <?= $form->field($model, 'numhijos')->textInput() ?>

    <?= $form->field($model, 'saldo')->textInput() ?>

    <?= $form->field($model, 'saldoinicialdebe')->textInput() ?>

    <?= $form->field($model, 'saldoinicialhaber')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
