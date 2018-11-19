<?php

use yii\db\Migration;

/**
 * Handles the creation of table `genres`.
 */
class m181119_033931_create_genres_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('genres', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('genres');
    }
}
