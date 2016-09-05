<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Naturaleza */

$this->title = $model->idnaturaleza;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Naturalezas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="naturaleza-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idnaturaleza], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idnaturaleza], [
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
            'attribute' => 'idnaturaleza',
            'label'=>'Id',
          ],
          [
            'attribute' => 'codigonaturaleza',
            'label'=>'Codigo',
          ],
          [
            'attribute' => 'descripcionnaturaleza',
            'label'=>'Descripcion',
          ],
        ],
    ]) ?>

</div>
