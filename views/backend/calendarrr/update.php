<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\calendarrr\models\Calendarrr */

$this->title = 'Update Calendarrr: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Calendarrr', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calendarrr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
