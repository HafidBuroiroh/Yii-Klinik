<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-form">
    <div class="col-md-7">
    <?php $form = ActiveForm::begin(); ?>
    </div>

    <div class="col-md-7">
    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-7">
    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan', ], ['prompt' => '']) ?>
    </div>

    <div class="col-md-7">
    <?= $form->field($model, 'tanggal_lahir')->textInput(['type' => 'date']) ?>
    </div>

    <div class="col-md-7">
    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-7">
    <?= $form->field($model, 'no_telepon')->textInput(['type' => 'number']) ?>
    </div>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
