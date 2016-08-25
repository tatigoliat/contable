<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Raza */

$this->title = Yii::t('app', 'Create Raza');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Razas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raza-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
