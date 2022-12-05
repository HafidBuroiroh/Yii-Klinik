<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BerobatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="berobat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama_pasien_id') ?>

    <?= $form->field($model, 'tanggal_berobat') ?>

    <?= $form->field($model, 'keluhan') ?>

    <?= $form->field($model, 'nama_dokter_id') ?>

    <?php // echo $form->field($model, 'hasil_periksa') ?>

    <?php // echo $form->field($model, 'obat_id') ?>

    <?php // echo $form->field($model, 'rujukan_id') ?>

    <?php // echo $form->field($model, 'biaya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
