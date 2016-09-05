<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CuentacontableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Cuentas contables');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuentacontable-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Registrar una Cuenta contable'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'idcuentac',
                'label'=>'ID',
            ],
            [
                'attribute' => 'codigocuentacontable',
                'label'=>'Codigo Cuenta',
            ],
            [
                'attribute' => 'descripcioncuenta',
                'label'=>'Descripcion Contable',
            ],
            [
                'attribute' => 'debe',
                'label'=>'Por el Debe',
            ],
            [
                'attribute' => 'haber',
                'label'=>'Por el Haber',
            ],

            // 'idempresa',
            // 'idplancuentacontable',
            // 'numhijos',
            // 'saldo',
            // 'saldoinicialdebe',
            // 'saldoinicialhaber',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
