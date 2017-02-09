<?php

use console\models\Migrate;

class m160805_050120_want extends Migrate
{
    public function safeUp()
    {
        $this->createTable('{{%want}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->null(),
            'name' => $this->string(255)->notNull()->unique(),
            'description' => $this->string(255)->null(),
            'user_id' => $this->integer()->notNull(),
            'worth' => $this->integer()->notNull(),
            'created_at' => $this->timestamp()->defaultExpression('current_timestamp'),
        ]);
        $this->addForeignKey('fk_want_user', '{{%want}}', 'user_id', '{{%user}}', 'id');
        $this->addForeignKey('fk_want_category', '{{%want}}', 'category_id', '{{%category}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%want}}');
    }
}