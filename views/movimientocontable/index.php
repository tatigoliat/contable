<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Cuentacontable;
use app\models\Empresa;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovimientocontableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Movimientocontables');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimientocontable-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Registrar Asiento Contable'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'idmovimientocontable',
                'label'=>'ID',
            ],

            [
                'attribute' => 'fecha',
                'label'=>'Fecha',
            ],

            [
              'attribute' => 'fkcuentacontable',
              'value' => function($Cuentacontable){
              $Cuentacontable = Cuentacontable::findOne($Cuentacontable->fkcuentacontable);
              return $Cuentacontable->descripcioncuenta;
                },
                        'filter'=>false,
                        'label'=>'Cuenta Contable'
            ],

            [
              'attribute' => 'fkempresa',
              'value' => function($Empresas){
              $Empresa = Empresa::findOne($Empresas->fkempresa);
              return $Empresa->nombreempresa;
                },
                        'filter'=>false,
                        //'filter' => Html::activeTextInput($searchModel, 'fkempresa', ['class' => 'form-control']),
                        'label'=>'Empresa'
            ],
            // 'mdebe',
            // 'mhaber',
            // 'fknaturaleza',
            // 'reversado',
            // 'concepto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
