<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Plancuenta */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Plancuenta',
]) . ' ' . $model->pkplancuenta;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plancuentas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pkplancuenta, 'url' => ['view', 'id' => $model->pkplancuenta]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="plancuenta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
