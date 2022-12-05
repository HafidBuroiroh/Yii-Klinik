<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\RumahSakit $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rumah-sakit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_rs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
