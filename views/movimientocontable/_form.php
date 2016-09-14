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

    <?php
          $Cuenta= ArrayHelper::map(\app\models\Empresa::find()->all(), 'codigoempresa', 'nombreempresa');
          echo $form->field($model, 'fkempresa')->dropDownList($Cuenta,
          [
              'prompt'=>'Porfavor elija una...',
          ]
          )->label('Empresa');
      ?>

      <?php

      $Modelos= ArrayHelper::map(\app\models\Cuentacontable::find()->all(), 'idcuentac', 'codigocuentacontable','descripcioncuenta' );
          echo $form->field($model, 'fkcuentacontable')->dropDownList($Modelos,
              [
              'prompt'=>'Porfavor elija una',
              ]
          );
        ?>


    <?php $fecha = date('Y-m-d'); ?>
    <?=$form->field($model, 'fecha')->textInput(array('value' => $fecha, 'placeholder' => $fecha,'onKeyPress'=>'return soloNumeros(event)','maxlength'=>'10'))->label('Ingrese una fecha en Formato AAAA-MM-DD');?>

    <?= $form->field($model, 'mdebe')->textInput(['placeholder' => 'Ingrese un monto por el debe', 'onKeyPress'=>'return soloNumeros(event)'])->label('Monto Debe')?>

    <?= $form->field($model, 'mhaber')->textInput(['placeholder' => 'Ingrese un monto por el haber', 'onKeyPress'=>'return soloNumeros(event)'])->label('Monto Haber') ?>

    <?= $form->field($model, 'concepto')->textInput(['maxlength' => true]) ?>

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
