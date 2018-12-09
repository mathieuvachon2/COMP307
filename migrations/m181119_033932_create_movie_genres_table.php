<?php

use yii\db\Migration;

/**
 * Handles the creation of table `movie_genres`.
 */
class m181119_033932_create_movie_genres_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('movie_genres', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('movie_genres');
    }
}
