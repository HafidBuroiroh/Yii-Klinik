<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Berobat $model */

$this->title = 'Update Berobat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Berobats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="berobat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
