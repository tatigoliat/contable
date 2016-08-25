<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Responsable */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Responsable',
]) . ' ' . $model->cedula;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Responsables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cedula, 'url' => ['view', 'id' => $model->cedula]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="responsable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
