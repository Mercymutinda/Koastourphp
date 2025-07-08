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
            "image"=> $this->string(255),
            'is_deleted' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]
        );
        
        $this->createTable("gallery", [
            "id"=> $this->primaryKey(),
            "image"=> $this->string(255),
            'is_deleted' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]
        );
        $this->createTable("services", [
            "id"=> $this->primaryKey(),
            "title"=> $this->string(255)->notNull(),
            "content"=> $this->text()->notNull(),
            'is_deleted' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]
        );
        $this->createTable("testimonials", [
            'id'=> $this->primaryKey(),
            'name'=> $this->string(255)->notNull(),
            'relation'=> $this->string(255)->notNull(),
            'content'=> $this->text()->notNull(),
            'image'=> $this->string(255),
            'is_deleted' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]
        );
        $this->createTable("board", [
            'id'=> $this->primaryKey(),
            'name'=> $this->string(255)->notNull(),
            'position'=> $this->text()->notNull(),
            'image'=> $this->string(255),
            'is_deleted' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
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
