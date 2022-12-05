<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dokter}}`.
 */
class m221103_044336_create_dokter_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dokter}}', [
            'id' => $this->primaryKey(),
            'nama_dokter' => $this->string(),
            'nip' => $this->integer(),
            'no_sip' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dokter}}');
    }
}
