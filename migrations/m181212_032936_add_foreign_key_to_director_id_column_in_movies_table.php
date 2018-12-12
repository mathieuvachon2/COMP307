<?php

use yii\db\Migration;

/**
 * Class m181212_032936_add_foreign_key_to_director_id_column_in_movies_table
 */
class m181212_032936_add_foreign_key_to_director_id_column_in_movies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // creates index for column `director_id`
        $this->createIndex(
            'idx-movies-director_id',
            'movies',
            'director_id'
        );

        // add foreign key for table `movies`
        $this->addForeignKey(
            'fk-movies-director_id',
            'movies',
            'director_id',
            'people',
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
            'fk-movies-director_id',
            'movies'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-movies-director_id',
            'movies'
        );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181212_032936_add_foreign_key_to_director_id_column_in_movies_table cannot be reverted.\n";

        return false;
    }
    */
}
