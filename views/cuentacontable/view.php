<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Empresa;
use app\models\Plancuenta;

$Empresa =  new Empresa;
$Plancuenta =  new Plancuenta;

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
                'confirm' => Yii::t('app', 'Esta seguro que desea eliminar el registro?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          [
            'attribute' => 'idcuentac',
            'label'=>'Id',
          ],

          [
            'attribute' => 'idempresa',
            'value' =>  Empresa::findOne($model->idempresa)->nombreempresa,
            'label'=>'Empresa',
          ],

          [
            'attribute' => 'idplancuentacontable',
            'value' =>  Plancuenta::findOne($model->idplancuentacontable)->descripcionplancuenta,
            'label'=>'Plan de Cuenta',
          ],

          [
            'attribute' => 'codigocuentacontable',
            'label'=>'Codigo',
          ],
          [
            'attribute' => 'descripcioncuenta',
            'label'=>'Descripcion',
          ],
          [
            'attribute' => 'debe',
            'label'=>'Monto por el Debe',
          ],
          [
            'attribute' => 'haber',
            'label'=>'Monto por el Haber',
          ],
            [
              'attribute' => 'saldo',
              'label'=>'Saldo',
            ],
            [
              'attribute' => 'saldoinicialdebe',
              'label'=>'Saldo Inicial por el Debe',
            ],
            [
              'attribute' => 'saldoinicialhaber',
              'label'=>'Saldo Inicial por el Haber',
            ],

        ],
    ]) ?>

</div>
