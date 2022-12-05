<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rs_rujuk}}`.
 */
class m221104_031516_create_rs_rujuk_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rs_rujuk}}', [
            'id' => $this->primaryKey(),
            'nama_rs' => $this->string(),
            'alamat' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rs_rujuk}}');
    }
}
