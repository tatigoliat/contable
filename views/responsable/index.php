<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ResponsableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Responsables');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsable-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Responsable'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cedula',
            'nombres',
            'telefono',
            'direccion',
            'lugaridlugar',
            // 'estadoidestado',
            // 'municipioidmunicipio',
            // 'parroquiaidparroquia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
