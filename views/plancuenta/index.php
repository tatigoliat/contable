<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <?= Html::a(Yii::t('app', 'Create Plancuenta'), ['create'], ['class' => 'btn btn-success']) ?>
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
                'label'=>'Empresa',
            ],
            [
                'attribute' => 'fknaturaleza',
                'label'=>'Naturaleza',
            ],
            // 'tipopago',
            // 'tiporecurso',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
