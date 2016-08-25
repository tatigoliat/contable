<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmpresaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Empresas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empresa-index">

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
                'attribute' => 'codigoempresa',
                'label'=>'ID',
            ],
            [
                'attribute' => 'nombreempresa',
                'label'=>'Razon Social',
            ],

            [
                'attribute' => 'nombresresponsable',
                'label'=>'Responsable',
            ],
            //'cedulaempresa',
            //'nombresresponsable',
            //'apellidosresponsable',
            // 'rifempresa',
            // 'telefono',
            // 'correoempresa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
