<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\calendarrr\models\Calendarrr */

$this->title = 'Create Calendarrr';
$this->params['breadcrumbs'][] = ['label' => 'Calendarrr', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calendarrr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
