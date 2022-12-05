<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\RumahSakit $model */

$this->title = 'Update Rumah Sakit: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rumah Sakit', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rumah-sakit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
