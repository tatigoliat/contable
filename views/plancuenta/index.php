<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\models\Empresa;
use app\models\Naturaleza;

$Naturalezas =  new Naturaleza;



/* @var $this yii\web\View */
/* @var $searchModel app\models\PlancuentaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Plancuentas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plancuenta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Registrar'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'pkplancuenta',
                'label'=>'ID',
            ],
            [
                'attribute' => 'codigocuenta',
                'label'=>'Codigo',
            ],
            [
                'attribute' => 'descripcionplancuenta',
                'label'=>'Descripcion',
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
            [
              'attribute' => 'fknaturaleza',
              'value' => function($Naturalezas){
              $Naturalezas = Naturaleza::findOne($Naturalezas->fknaturaleza);
              return $Naturalezas->descripcionnaturaleza;
                },
                        'filter'=>false,
                        'label'=>'Naturaleza'
            ],

            // 'tipopago',
            // 'tiporecurso',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
