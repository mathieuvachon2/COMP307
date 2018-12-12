<?php

use yii\db\Migration;

/**
 * Handles adding image_url to table `movies`.
 */
class m181212_060403_add_image_url_column_to_movies_table_and_games_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('movies', 'image_url', $this->string(255));

        $this->addColumn('games', 'image_url', $this->string(255));


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('movies', 'image_url');

        $this->dropColumn('games', 'image_url');
    }
}
