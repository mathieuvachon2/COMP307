<?php

use yii\db\Migration;

/**
 * Handles the creation of table `game_genres`.
 */
class m181119_033931_create_game_genres_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('game_genres', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('game_genres');
    }
}
