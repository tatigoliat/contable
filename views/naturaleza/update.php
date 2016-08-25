<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Naturaleza */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Naturaleza',
]) . ' ' . $model->idnaturaleza;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Naturalezas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idnaturaleza, 'url' => ['view', 'id' => $model->idnaturaleza]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="naturaleza-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
