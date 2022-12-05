<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pasien}}`.
 */
class m221104_030444_create_pasien_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pasien}}', [
            'id' => $this->primaryKey(),
            'nama_pasien' => $this->string(),
            'jenis_kelamin' =>"ENUM('Laki-Laki','Perempuan')",
            'tanggal_lahir' => $this->date(),
            'alamat' => $this->string(),
            'no_telepon' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pasien}}');
    }
}
