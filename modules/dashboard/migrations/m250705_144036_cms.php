<?php

use yii\db\Migration;

class m250705_144036_cms extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("banners", [
            "id"=> $this->primaryKey(),
            "title"=> $this->string(255)->notNull(),
            "description"=> $this->text()->notNull(),
            "image"=> $this->string(255)->notNull(),
            'is_deleted' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250705_144036_cms cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250705_144036_cms cannot be reverted.\n";

        return false;
    }
    */
}
