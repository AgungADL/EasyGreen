<?php

use yii\db\Migration;

class m250611_002740_create_table_tanaman extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tanaman', [
            'kd_tanaman' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
            'kd_kategori' => $this->integer()->notNull(),
            'jumlah' => $this->integer()->notNull(),
            'deskripsi' => $this->text(),
            'username' => $this->string()->notNull()->unique(),
        ]);

        $this->addForeignKey(
            'fk-tanaman-username',
            'tanaman',
            'username',
            'pengguna',
            'username',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-tanaman-username', 'tanaman');
        $this->dropTable('tanaman');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250611_002740_create_table_tanaman cannot be reverted.\n";

        return false;
    }
    */
}
