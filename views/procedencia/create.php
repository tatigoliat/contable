<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Procedencia */

$this->title = Yii::t('app', 'Create Procedencia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Procedencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="procedencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
