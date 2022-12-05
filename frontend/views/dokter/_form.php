<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Dokter $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dokter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'no_sip')->textInput(['type' => 'number']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
