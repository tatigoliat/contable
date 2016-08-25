<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Raza */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Raza',
]) . ' ' . $model->descripcion;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Razas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descripcion, 'url' => ['view', 'id' => $model->descripcion]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="raza-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
