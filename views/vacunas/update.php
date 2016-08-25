<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vacunas */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Vacunas',
]) . ' ' . $model->descripcion_vacunas;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vacunas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descripcion_vacunas, 'url' => ['view', 'id' => $model->descripcion_vacunas]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="vacunas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
