<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dokter".
 *
 * @property int $id
 * @property string|null $nama_dokter
 * @property int|null $nip
 * @property int|null $no_sip
 *
 * @property Berobat[] $berobats
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'no_sip', 'nama_dokter'], 'required'],
            [['nip', 'no_sip'], 'integer'],
            [['nama_dokter'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_dokter' => 'Nama Dokter',
            'nip' => 'Nip',
            'no_sip' => 'No Sip',
        ];
    }

    /**
     * Gets query for [[Berobats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBerobats()
    {
        return $this->hasMany(Berobat::class, ['nama_dokter_id' => 'id']);
    }
    public function getBerobat()
    {
        return $this->hasOne(Berobat::class, ['nama_dokter_id' => 'id']);
    }
}
