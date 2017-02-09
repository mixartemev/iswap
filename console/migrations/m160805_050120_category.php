<?php

use console\models\Migrate;

class m160805_050120_category extends Migrate
{
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->unique(),
            'description' => $this->string(255)->null(),
            'parent_id' => $this->integer()->notNull()
        ]);
        $this->addForeignKey('fk_category_parent', '{{%category}}', 'parent_id', '{{%category}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}