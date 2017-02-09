<?php

use console\models\Migrate;

class m160805_050120_sale extends Migrate
{
    public function safeUp()
    {
        $this->createTable('{{%sale}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->null(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->string(255)->null(),
            'user_id' => $this->integer()->notNull(),
            'worth' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk_sale_user', '{{%sale}}', 'user_id', '{{%user}}', 'id');
        $this->addForeignKey('fk_sale_category', '{{%sale}}', 'category_id', '{{%category}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%sale}}');
    }
}