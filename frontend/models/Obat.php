<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id
 * @property string|null $nama_obat
 * @property string|null $jenis
 * @property int|null $stok
 *
 * @property Berobat[] $berobats
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stok', 'nama_obat', 'jenis'], 'required'],
            [['stok'], 'integer'],
            [['nama_obat', 'jenis'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_obat' => 'Nama Obat',
            'jenis' => 'Jenis',
            'stok' => 'Stok',
        ];
    }

    /**
     * Gets query for [[Berobats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBerobats()
    {
        return $this->hasMany(Berobat::class, ['obat_id' => 'id']);
    }
}
