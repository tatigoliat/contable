<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empresa */

$this->title = Yii::t('app', 'Editar {modelClass}: ', [
    'modelClass' => 'Empresa',
]) . '#' . $model->codigoempresa .' - '.$model->nombreempresa;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Empresas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigoempresa, 'url' => ['view', 'id' => $model->codigoempresa]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');

?>
<?= Html::a(Yii::t('app','Volver'),['index'],['class'=>'btn btn-info', 'style'=>'before:'])?>

<div class="empresa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
