<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Students */

$this->title = 'Update Students: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->NIM]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="students-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
