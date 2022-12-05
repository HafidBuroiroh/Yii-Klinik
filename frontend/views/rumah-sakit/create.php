<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\RumahSakit $model */

$this->title = 'Create Rumah Sakit';
$this->params['breadcrumbs'][] = ['label' => 'Rumah Sakit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rumah-sakit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
