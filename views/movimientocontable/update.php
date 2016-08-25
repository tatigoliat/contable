<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Movimientocontable */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Movimientocontable',
]) . ' ' . $model->idmovimientocontable;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Movimientocontables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmovimientocontable, 'url' => ['view', 'id' => $model->idmovimientocontable]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="movimientocontable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
