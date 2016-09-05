<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Cuentacontable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuentacontable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
          $Cuenta= ArrayHelper::map(\app\models\Empresa::find()->all(), 'codigoempresa', 'nombreempresa');
          echo $form->field($model, 'idempresa')->dropDownList($Cuenta,
          [
              'prompt'=>'Porfavor elija una...',
          ]
          )->label('Empresa');

      ?>

      <?php
            $Cuenta= ArrayHelper::map(\app\models\Plancuenta::find()->where("espadre='NO'")->all(), 'pkplancuenta', 'codigocuenta', 'descripcionplancuenta');

            echo $form->field($model, 'idplancuentacontable')->dropDownList($Cuenta,
            [
                'prompt'=>'Porfavor elija una...',
            ]
            )->label('Cuenta Contable a la que pertenece');

        ?>

    <?= $form->field($model, 'codigocuentacontable')->textInput(['placeholder' => 'Ingrese Codigo', 'onKeyPress'=>'return soloNumeros(event)','maxlength' => true])->label('Codigo Cuenta Contable') ?>

    <?= $form->field($model, 'descripcioncuenta')->textInput(['placeholder' => 'Ingrese una descripcion','maxlength' => true])->label('Ingrese Descripion') ?>

    <?= $form->field($model, 'debe')->textInput(['placeholder' => 'Ingrese un monto por el debe', 'onKeyPress'=>'return soloNumeros(event)'])->label('Monto Debe') ?>

    <?= $form->field($model, 'haber')->textInput(['placeholder' => 'Ingrese un monto por el haber', 'onKeyPress'=>'return soloNumeros(event)'])->label('Monto Haber') ?>

    <?= $form->field($model, 'saldo')->textInput()->label('Saldo en cuenta') ?>

    <?= $form->field($model, 'saldoinicialdebe')->textInput()->label('Saldo Inicial Debe') ?>

    <?= $form->field($model, 'saldoinicialhaber')->textInput()->label('Saldo inicial Haber') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Guardar') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<script>
function soloNumeros(event){
var key = event.keyCode ? event.keyCode : event.which ;

return (key <= 40 || (key >= 48 && key <= 57) || (key >=44 && key<=46));
}
</script>
