<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cuentacontable */

$this->title = Yii::t('app', 'Registro de Cuentas Cuentacontables');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cuentacontables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuentacontable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
