<?php

use yii\helpers\ArrayHelper;
use app\models\Pasien;
use app\models\Obat;
use yii\helpers\Html;
use app\models\Dokter;
use yii\jui\DatePicker;
use app\models\RumahSakit;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Berobat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="berobat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien_id')->dropDownList(
    	ArrayHelper::map(Pasien::find()->all(),'id','nama_pasien'),
    	[
            'prompt'=>'Select Nama Pasien',
        ]) ?>

    <?= $form->field($model, 'tanggal_berobat')->textInput(['type' => 'date'])?>

    <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_dokter_id')->dropDownList(
    	ArrayHelper::map(Dokter::find()->all(),'id','nama_dokter'),
    	[
            'prompt'=>'Select Nama Dokter',
        ]) ?>

    <?= $form->field($model, 'hasil_periksa')->dropDownList([ 'Dirujuk' => 'Dirujuk', 'Diobati' => 'Diobati', ], 
    [
        'prompt' => '',
        "id" => "object",
        "onChange" => "checkOption(this)",
        ]) ?>

    <?= $form->field($model, 'obat_id')->dropDownList(
    	ArrayHelper::map(Obat::find()->all(),'id','nama_obat'),
    	[
            'prompt'=>'Select Nama Obat',
            "id" => "obat",
           
        ]) ?>

    <?= $form->field($model, 'rujukan_id')->dropDownList(
    	ArrayHelper::map(RumahSakit::find()->all(),'id','nama_rs'),
    	[
            'prompt'=>'Select Nama Rumah Sakit',
            "id" => "rumasakit"
        ],) ?>

    <?= $form->field($model, 'biaya')->textInput(['type' => 'number']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    function checkOption(value){
 var st = $("#object").val();
 if(st == "Dirujuk"){
  document.getElementById("obat").disabled = true;
 }if(st == "Diobati"){
  document.getElementById("rumasakit").disabled = true;
 }if(st == "Diobati"){
  document.getElementById("obat").disabled = false;
 }if(st == "Dirujuk"){
    document.getElementById("rumasakit").disabled = false;
 }
}
</script>
