<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <?= Html::a(Yii::t('app', 'Create Movimientocontable'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idmovimientocontable',
            'fecha',
            'fechareverso',
            'fkcuentacontable',
            'fkempresa',
            // 'mdebe',
            // 'mhaber',
            // 'fknaturaleza',
            // 'reversado',
            // 'concepto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
