<?php

use yii\db\Migration;

/**
 * Handles the creation of table `movies_genres`.
 * Has foreign keys to the tables:
 *
 * - `movies`
 * - `genres`
 */
class m181119_034444_create_junction_table_for_movies_and_movie_genres_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('movies_genres', [
            'movies_id' => $this->integer()->notNull(),
            'movie_genres_id' => $this->integer()->notNull(),
            'PRIMARY KEY(movies_id, movie_genres_id)'
        ]);

        // creates index for column `movies_id`
        $this->createIndex(
            'idx-movies_genres-movies_id',
            'movies_genres',
            'movies_id'
        );

        // add foreign key for table `movies`
        $this->addForeignKey(
            'fk-movies_genres-movies_id',
            'movies_genres',
            'movies_id',
            'movies',
            'id',
            'CASCADE'
        );

        // creates index for column `genres_id`
        $this->createIndex(
            'idx-movies_genres-genres_id',
            'movies_genres',
            'movie_genres_id'
        );

        // add foreign key for table `genres`
        $this->addForeignKey(
            'fk-movies_genres-genres_id',
            'movies_genres',
            'movie_genres_id',
            'movie_genres',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `movies`
        $this->dropForeignKey(
            'fk-movies_genres-movies_id',
            'movies_genres'
        );

        // drops index for column `movies_id`
        $this->dropIndex(
            'idx-movies_genres-movies_id',
            'movies_genres'
        );

        // drops foreign key for table `genres`
        $this->dropForeignKey(
            'fk-movies_genres-genres_id',
            'movies_genres'
        );

        // drops index for column `genres_id`
        $this->dropIndex(
            'idx-movies_genres-genres_id',
            'movies_genres'
        );

        $this->dropTable('movies_genres');
    }
}
