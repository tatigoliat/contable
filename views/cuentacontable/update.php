<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cuentacontable */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cuentacontable',
]) . ' ' . $model->idcuentac;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cuentacontables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcuentac, 'url' => ['view', 'id' => $model->idcuentac]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cuentacontable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
