<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Procedencia */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Procedencia',
]) . ' ' . $model->idprocedencia;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Procedencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idprocedencia, 'url' => ['view', 'id' => $model->idprocedencia]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="procedencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
