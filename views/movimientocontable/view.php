<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Movimientocontable */

$this->title = $model->idmovimientocontable;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Movimientocontables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimientocontable-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idmovimientocontable], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idmovimientocontable], [
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
            'idmovimientocontable',
            'fecha',
            'fechareverso',
            'fkcuentacontable',
            'fkempresa',
            'mdebe',
            'mhaber',
            'fknaturaleza',
            'reversado',
            'concepto',
        ],
    ]) ?>

</div>
