<?php

use yii\db\Migration;

/**
 * Handles the creation of table `games_genres`.
 * Has foreign keys to the tables:
 *
 * - `games`
 * - `genres`
 */
class m181208_213312_create_junction_table_for_games_and_game_genres_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('games_genres', [
            // 'id' => $this->primaryKey(),
            'games_id' => $this->integer()->notNull(),
            'game_genres_id' => $this->integer()->notNull(),
            'PRIMARY KEY(games_id, game_genres_id)'
        ]);

        // creates index for column `games_id`
        $this->createIndex(
            'idx-games_genres-games_id',
            'games_genres',
            'games_id'
        );

        // add foreign key for table `games`
        $this->addForeignKey(
            'fk-games_genres-games_id',
            'games_genres',
            'games_id',
            'games',
            'id',
            'CASCADE'
        );

        // creates index for column `genres_id`
        $this->createIndex(
            'idx-games_genres-genres_id',
            'games_genres',
            'game_genres_id'
        );

        // add foreign key for table `genres`
        $this->addForeignKey(
            'fk-games_genres-genres_id',
            'games_genres',
            'game_genres_id',
            'game_genres',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `games`
        $this->dropForeignKey(
            'fk-games_genres-games_id',
            'games_genres'
        );

        // drops index for column `games_id`
        $this->dropIndex(
            'idx-games_genres-games_id',
            'games_genres'
        );

        // drops foreign key for table `genres`
        $this->dropForeignKey(
            'fk-games_genres-genres_id',
            'games_genres'
        );

        // drops index for column `genres_id`
        $this->dropIndex(
            'idx-games_genres-genres_id',
            'games_genres'
        );

        $this->dropTable('games_genres');
    }
}
