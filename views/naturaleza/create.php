<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Naturaleza */

$this->title = Yii::t('app', 'Registrar Naturaleza');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Naturalezas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="naturaleza-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
