<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id
 * @property string|null $nama_pasien
 * @property string|null $jenis_kelamin
 * @property string|null $tanggal_lahir
 * @property string|null $alamat
 * @property string|null $no_telepon
 *
 * @property Berobat[] $berobats
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'alamat', 'no_telepon', 'jenis_kelamin', 'tanggal_lahir'], 'required'],
            [['jenis_kelamin'], 'string'],
            [['tanggal_lahir'], 'safe'],
            [['nama_pasien', 'alamat', 'no_telepon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pasien' => 'Nama Pasien',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'no_telepon' => 'No Telepon',
        ];
    }

    /**
     * Gets query for [[Berobats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBerobats()
    {
        return $this->hasMany(Berobat::class, ['nama_pasien_id' => 'id']);
    }
    public function getBerobat()
    {
        return $this->hasOne(Berobat::class, ['nama_pasien_id' => 'id']);
    }
}
