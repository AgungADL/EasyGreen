<?php

use yii\db\Migration;

class m250611_002803_create_table_hasil extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('hasil', [
            'kd_hasil' => $this->primaryKey(),
            'kd_tanaman' => $this->integer()->notNull(),
            'nama' => $this->string()->notNull(),
            'jumlah' => $this->integer()->notNull(),
            'deskripsi' => $this->text(),
        ]);

        $this->addForeignKey(
            'fk-hasil-kd_tanaman',
            'hasil',
            'kd_tanaman',
            'tanaman',
            'kd_tanaman',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-hasil-kd_tanaman', 'hasil');
        $this->dropTable('hasil');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250611_002803_create_table_hasil cannot be reverted.\n";

        return false;
    }
    */
}
