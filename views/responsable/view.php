<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Responsable */

$this->title = $model->cedula;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Responsables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsable-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->cedula], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->cedula], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cedula',
            'nombres',
            'telefono',
            'direccion',
            'lugaridlugar',
            'estadoidestado',
            'municipioidmunicipio',
            'parroquiaidparroquia',
        ],
    ]) ?>

</div>
