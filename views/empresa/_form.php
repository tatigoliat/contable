<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Empresa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombreempresa')->textInput()->label('Razon Social'); ?>

    <?= $form->field($model, 'rifempresa')->textInput()->label('RIF'); ?>

    <?= $form->field($model, 'correoempresa')->textInput()->label('Correo electronico'); ?>

    <?= $form->field($model, 'cedulaempresa')->textInput()->label('Cedula'); ?>

    <?= $form->field($model, 'nombresresponsable')->textInput()->label('Nombres'); ?>

    <?= $form->field($model, 'apellidosresponsable')->textInput()->label('Apellidos'); ?>

    <?= $form->field($model, 'telefono')->textInput()->label('Telefono');  ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Almacenar') : Yii::t('app', 'Editar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
