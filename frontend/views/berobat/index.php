<?php

use app\models\Berobat;
use app\models\Pasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\BerobatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Berobats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berobat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Berobat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => 'Nama Pasien',
                'attribute' => 'nama_pasien',
                'value'=>'namaPasien.nama_pasien', //relation name with their attribute
            ],
            'tanggal_berobat',
            'keluhan',
            [
                'label' => 'Nama Dokter',
                'attribute' => 'nama_dokter',
                'value'=>'namaDokter.nama_dokter', //relation name with their attribute
            ],
            'hasil_periksa',
            [
                'label' => 'Nama Obat',
                'attribute' => 'obat',
                'value'=>'obat.nama_obat', //relation name with their attribute
            ],
            [
                'label' => 'Nama Rumah Sakit',
                'attribute' => 'rujukan',
                'value'=>'rujukan.nama_rs', //relation name with their attribute
            ],
            'biaya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Berobat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
