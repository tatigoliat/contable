<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Movimientocontable */

$this->title = Yii::t('app', 'Registro de Asientos Contables');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Movimientocontables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimientocontable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
