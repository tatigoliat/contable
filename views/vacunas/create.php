<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vacunas */

$this->title = Yii::t('app', 'Create Vacunas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vacunas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacunas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
