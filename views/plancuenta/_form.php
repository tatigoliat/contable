<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Plancuenta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plancuenta-form">

    <?php $form = ActiveForm::begin(); ?>

  <?php
        $Naturaleza= ArrayHelper::map(\app\models\Naturaleza::find()->all(), 'idnaturaleza', 'descripcionnaturaleza');
        echo $form->field($model, 'fknaturaleza')->dropDownList($Naturaleza,
        [
            'prompt'=>'Porfavor elija una...',
        ]
        )->label('Naturaleza');

    ?>

    <?= $form->field($model, 'codigocuenta')->textInput(['placeholder' => '11020000000', 'onKeyPress'=>'return soloNumeros(event)', 'maxlength' => 11])->label('Codigo Contable'); ?>

    <?= $form->field($model, 'descripcionplancuenta')->textInput(['placeholder' => 'Indique una descripcion', 'maxlength' => true])->label('Descripcion'); ?>

  <?php
    $Empresa= ArrayHelper::map(\app\models\Empresa::find()->all(), 'codigoempresa', 'nombreempresa');
    echo $form->field($model, 'fkempresa')->dropDownList($Empresa,
    [
        'prompt'=>'Porfavor elija una...',
    ]
    )->label('Empresa');

?>

    <?php
        $lista=['SI'=>'SI',
                'NO'=>'NO'];
        echo $form->field($model, 'espadre')->dropdownList($lista, ['prompt'=>'Seleccione...','id'=>'espadre']); ?>



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
