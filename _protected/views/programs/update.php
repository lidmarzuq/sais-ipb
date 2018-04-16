<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programs */

$this->title = 'Update Programs: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProgramID, 'url' => ['view', 'id' => $model->ProgramID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="programs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
