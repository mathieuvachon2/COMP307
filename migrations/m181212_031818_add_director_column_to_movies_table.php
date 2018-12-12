<?php

use yii\db\Migration;

/**
 * Handles adding director to table `movies`.
 */
class m181212_031818_add_director_column_to_movies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('movies', 'director_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('movies', 'director_id');       
    }
}
