<?php

use yii\db\Migration;

/**
 * Handles the creation of table `studio`.
 */
class m181212_031633_create_studios_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('studios', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('studios');
    }
}
