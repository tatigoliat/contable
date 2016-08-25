<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Plancuenta */

$this->title = Yii::t('app', 'Registrar Plan de Cuenta');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plancuentas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plancuenta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
