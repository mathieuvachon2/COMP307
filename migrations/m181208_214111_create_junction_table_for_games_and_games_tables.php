<?php

use yii\db\Migration;

/**
 * Handles the creation of table `games_games`.
 * Has foreign keys to the tables:
 *
 * - `games`
 */
class m181208_214111_create_junction_table_for_games_and_games_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('games_games', [
            // 'id' => $this->primaryKey(),
            'games_id_1' => $this->integer()->notNull(),
            'games_id_2' => $this->integer()->notNull(),
            'count' => $this->integer()->notNull()->defaultValue(0),
            'PRIMARY KEY(games_id_1, games_id_2)'
        ]);

        // creates index for column `games_id`
        $this->createIndex(
            'idx-games_games-games_id',
            'games_games',
            'games_id_1'
        );

        // add foreign key for table `games`
        $this->addForeignKey(
            'fk-games_games-games_id_1',
            'games_games',
            'games_id_1',
            'games',
            'id',
            'CASCADE'
        );

        // add foreign key for table `games`
        $this->addForeignKey(
            'fk-games_games-games_id_2',
            'games_games',
            'games_id_2',
            'games',
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
            'fk-games_games-games_id_1',
            'games_games'
        );

        $this->dropForeignKey(
            'fk-games_games-games_id_2',
            'games_games'
        );

        // drops index for column `games_id`
        $this->dropIndex(
            'idx-games_games-games_id',
            'games_games'
        );

        $this->dropTable('games_games');
    }
}
