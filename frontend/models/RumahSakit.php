<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rs_rujuk".
 *
 * @property int $id
 * @property string|null $nama_rs
 * @property string|null $alamat
 *
 * @property Berobat[] $berobats
 */
class RumahSakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rs_rujuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_rs', 'alamat'], 'required'],
            [['nama_rs', 'alamat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_rs' => 'Nama Rumah Sakit',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[Berobats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBerobats()
    {
        return $this->hasMany(Berobat::class, ['rujukan_id' => 'id']);
    }
}
