<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%berobat}}`.
 */
class m221107_072140_create_berobat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%berobat}}', [
            'id' => $this->primaryKey(),
            'nama_pasien_id' => $this->integer(),
            'tanggal_berobat' => $this->date(),
            'keluhan' => $this->string(),
            'nama_dokter_id' => $this->integer(),
            'hasil_periksa' =>"ENUM('Dirujuk','Diobati')",
            'obat_id' => $this->integer(),
            'rujukan_id' => $this->integer(),
            'biaya' => $this->integer(),
        ]);
        
        $this->addForeignKey(
            'fk-berobat-nama_pasien_id',
            'berobat',
            'nama_pasien_id',
            'pasien',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-berobat-nama_dokter_id',
            'berobat',
            'nama_dokter_id',
            'dokter',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-berobat-obat_id',
            'berobat',
            'obat_id',
            'obat',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-berobat-rujukan_id',
            'berobat',
            'rujukan_id',
            'rs_rujuk',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%berobat}}');
        $this->dropForeignKey(
            'fk-berobat-nama_pasien_id',
            'berobat'
        );
        $this->dropForeignKey(
            'fk-berobat-nama_dokter_id',
            'berobat'
        );
        $this->dropForeignKey(
            'fk-berobat-obat_id',
            'berobat'
        );
        $this->dropForeignKey(
            'fk-berobat-rujukan_id',
            'berobat'
        );
    }
}
