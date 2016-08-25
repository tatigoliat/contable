<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Responsable */

$this->title = Yii::t('app', 'Create Responsable');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Responsables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
