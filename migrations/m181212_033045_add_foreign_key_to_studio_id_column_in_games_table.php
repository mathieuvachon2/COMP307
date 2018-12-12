<?php

use yii\db\Migration;

/**
 * Class m181212_033045_add_foreign_key_to_studio_id_column_in_games_table
 */
class m181212_033045_add_foreign_key_to_studio_id_column_in_games_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // creates index for column `studio_id`
        $this->createIndex(
            'idx-games-studio_id',
            'games',
            'studio_id'
        );

        // add foreign key for table `games`
        $this->addForeignKey(
            'fk-games-studio_id',
            'games',
            'studio_id',
            'studios',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // add foreign key for table `games`
        $this->dropForeignKey(
            'fk-games-studio_id',
            'games'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-games-studio_id',
            'games'
        );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181212_033045_add_foreign_key_to_studio_id_column_in_games_table cannot be reverted.\n";

        return false;
    }
    */
}
