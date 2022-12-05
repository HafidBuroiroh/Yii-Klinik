<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Berobat $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Berobats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="berobat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'namaPasien.nama_pasien',
               
        ],
            'tanggal_berobat',
            'keluhan',
            [
                'attribute' => 'namaDokter.nama_dokter'
            ],
            'hasil_periksa',
           [
             'attribute' => 'obat.nama_obat'
           ],
            [
                'attribute' => 'rujukan.nama_rs'
            ],
            'biaya',
        ],
    ]) ?>

</div>
