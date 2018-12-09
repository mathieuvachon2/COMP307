<?php

use yii\db\Migration;

/**
 * Handles the creation of table `movies_movies`.
 * Has foreign keys to the tables:
 *
 * - `movies`
 */
class m181208_214126_create_junction_table_for_movies_and_movies_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('movies_movies', [
            // 'id' => $this->primaryKey(),
            'movies_id_1' => $this->integer()->notNull(),
            'movies_id_2' => $this->integer()->notNull(),
            'count' => $this->integer()->notNull()->defaultValue(0),
            'PRIMARY KEY(movies_id_1, movies_id_2)'

        ]);

        // creates index for column `movies_id`
        $this->createIndex(
            'idx-movies_movies-movies_id',
            'movies_movies',
            'movies_id_1'
        );

        // add foreign key for table `movies`
        $this->addForeignKey(
            'fk-movies_movies-movies_id_1',
            'movies_movies',
            'movies_id_1',
            'movies',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-movies_movies-movies_id_2',
            'movies_movies',
            'movies_id_2',
            'movies',
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
            'fk-movies_movies-movies_id_1',
            'movies_movies'
        );

        // drops foreign key for table `movies`
        $this->dropForeignKey(
            'fk-movies_movies-movies_id_2',
            'movies_movies'
        );

        // drops index for column `movies_id`
        $this->dropIndex(
            'idx-movies_movies-movies_id',
            'movies_movies'
        );

        $this->dropTable('movies_movies');
    }
}
