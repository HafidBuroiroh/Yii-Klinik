<?php

namespace app\models;

use Yii;
use app\models\RumahSakit;

/**
 * This is the model class for table "berobat".
 *
 * @property int $id
 * @property int|null $nama_pasien_id
 * @property string|null $tanggal_berobat
 * @property string|null $keluhan
 * @property int|null $nama_dokter_id
 * @property string|null $hasil_periksa
 * @property int|null $obat_id
 * @property int|null $rujukan_id
 * @property int|null $biaya
 *
 * @property Dokter $namaDokter
 * @property Pasien $namaPasien
 * @property Obat $obat
 * @property RumahSakit $rujukan
 */
class Berobat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berobat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien_id', 'nama_dokter_id', 'biaya', 'keluhan', 'hasil_periksa','tanggal_berobat'], 'required'],
            [['nama_pasien_id', 'nama_dokter_id', 'obat_id', 'rujukan_id', 'biaya'], 'integer'],
            [['tanggal_berobat'], 'safe'],
            [['keluhan', 'hasil_periksa'], 'string', 'max' => 255],
            [['nama_dokter_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['nama_dokter_id' => 'id']],
            [['nama_pasien_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['nama_pasien_id' => 'id']],
            [['obat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Obat::class, 'targetAttribute' => ['obat_id' => 'id']],
            [['rujukan_id'], 'exist', 'skipOnError' => true, 'targetClass' => RumahSakit::class, 'targetAttribute' => ['rujukan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pasien_id' => 'Nama Pasien',
            'tanggal_berobat' => 'Tanggal Berobat',
            'keluhan' => 'Keluhan',
            'nama_dokter_id' => 'Nama Dokter',
            'hasil_periksa' => 'Hasil Periksa',
            'obat_id' => 'Obat',
            'rujukan_id' => 'Rujukan',
            'biaya' => 'Biaya',
        ];
    }

    /**
     * Gets query for [[NamaDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaDokter()
    {
        return $this->hasOne(Dokter::class, ['id' => 'nama_dokter_id']);
    }

    /**
     * Gets query for [[NamaPasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaPasien()
    {
        return $this->hasOne(Pasien::class, ['id' => 'nama_pasien_id']);
    }

    /**
     * Gets query for [[Obat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObat()
    {
        return $this->hasOne(Obat::class, ['id' => 'obat_id']);
    }

    /**
     * Gets query for [[Rujukan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRujukan()
    {
        return $this->hasOne(RumahSakit::class, ['id' => 'rujukan_id']);
    }
}
