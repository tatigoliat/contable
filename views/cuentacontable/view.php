<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cuentacontable */

$this->title = $model->idcuentac;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cuentacontables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuentacontable-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idcuentac], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idcuentac], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcuentac',
            'codigocuentacontable',
            'debe',
            'haber',
            'idempresa',
            'idplancuentacontable',
            'numhijos',
            'saldo',
            'saldoinicialdebe',
            'saldoinicialhaber',
        ],
    ]) ?>

</div>
