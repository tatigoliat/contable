<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Naturaleza */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="naturaleza-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigonaturaleza')->textInput(['placeholder' => 'Ingrese Codigo', 'onKeyPress'=>'return soloNumeros(event)', 'maxlength' => true])->label('Codigo') ?>

    <?= $form->field($model, 'descripcionnaturaleza')->textInput(['placeholder' => 'Ingrese una Descripcion','maxlength' => true])->label('Descripcion') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Crear') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
function soloNumeros(event){
var key = event.keyCode ? event.keyCode : event.which ;

return (key <= 40 || (key >= 48 && key <= 57) || (key >=44 && key<=46));
}
</script>
