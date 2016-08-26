<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Empresa */

$this->title = '#' .$model->codigoempresa.' - '.$model->nombreempresa;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Empresas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empresa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app','Volver'),['index'],['class'=>'btn btn-info', 'style'=>'before:'])?>
        <?= Html::a(Yii::t('app', 'Editar'), ['update', 'id' => $model->codigoempresa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Eliminar'), ['delete', 'id' => $model->codigoempresa], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Esta seguro que desea eliminar el registo numero:'.$model->codigoempresa.'?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          [
              'attribute' => 'codigoempresa',
              'label'=>'ID',
          ],
          [
              'attribute' => 'nombreempresa',
              'label'=>'Razon Social',
          ],
          [
              'attribute' => 'rifempresa',
              'label'=>'RIF',
          ],
          [
              'attribute' => 'cedulaempresa',
              'label'=>'Cedula',
          ],
          [
              'attribute' => 'nombresresponsable',
              'label'=>'Nombre',
          ],
          [
              'attribute' => 'apellidosresponsable',
              'label'=>'Apellidos',
          ],
          [
              'attribute' => 'telefono',
              'label'=>'Telefono',
          ],
          [
              'attribute' => 'correoempresa',
              'label'=>'Correo',
          ],

        ],
    ]) ?>

</div>
