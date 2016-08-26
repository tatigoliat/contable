<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Empresa;
use app\models\Naturaleza;

$Empresa =  new Empresa;
$Naturaleza =  new Naturaleza;

/* @var $this yii\web\View */
/* @var $model app\models\Plancuenta */

$this->title = '#' .$model->pkplancuenta.' - '.$model->descripcionplancuenta;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plancuentas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plancuenta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app','Volver'),['index'],['class'=>'btn btn-info', 'style'=>'before:'])?>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->pkplancuenta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->pkplancuenta], [
            'class' => 'btn btn-danger',
            'data' => [
              'confirm' => Yii::t('app', 'Esta seguro que desea eliminar el registo numero:'.$model->pkplancuenta.'?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
              'attribute' => 'pkplancuenta',
              'label'=>'Id',
            ],
            [
              'attribute' => 'fknaturaleza',
              'value' =>  Naturaleza::findOne($model->fknaturaleza)->descripcionnaturaleza,
              'label'=>'Naturaleza de la Cuenta',
            ],

            [
              'attribute' => 'codigocuenta',
              'label'=>'Codigo Contable',
            ],
            [

              'attribute' => 'descripcionplancuenta',
              'label'=>'Descripcion',
            ],
            [
              'attribute' => 'fkempresa',
              'value' =>  Empresa::findOne($model->fkempresa)->nombreempresa,
              'label'=>'Razon Social',
            ],
            [
              'attribute' => 'espadre',
              'label'=>'Es de movimiento',
            ],


        ],
    ]) ?>

</div>
