<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model app\models\Movimientocontable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimientocontable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha')->textInput(['placeholder' => 'AAAA/MM/DD Ingrese Fecha en el formato requerido', 'onKeyPress'=>'return soloNumeros(event)'])->label('Fecha')?>

    <?= $form->field($model, 'fkcuentacontable')->textInput()->label('Cuenta Contable')?>

    <?php
          $Cuenta= ArrayHelper::map(\app\models\Cuentacontable::find()->all(), 'idcuentacontable', 'descripcioncuenta');
          echo $form->field($model, 'idmovimientocontable')->dropDownList($Cuenta,
          [
              'prompt'=>'Porfavor elija una...',
          ]
          )->label('Cuenta Contable');

      ?>



    <?= $form->field($model, 'fkempresa')->textInput()->label('Empresa')  ?>

    <?= $form->field($model, 'mdebe')->textInput()->label('Monto DEBE')  ?>

    <?= $form->field($model, 'mhaber')->textInput()->label('Monto HABER')  ?>

    <?= $form->field($model, 'fknaturaleza')->textInput()->label('Naturaleza')  ?>

    <?= $form->field($model, 'concepto')->textInput(['maxlength' => true])->label('Concepto')  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
function soloNumeros(event){
var key = event.keyCode ? event.keyCode : event.which ;

return (key <= 40 || (key >= 48 && key <= 57) || (key >=44 && key<=46));
}
</script>
