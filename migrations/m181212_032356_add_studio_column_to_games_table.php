<?php

use yii\db\Migration;

/**
 * Handles adding studio to table `games`.
 */
class m181212_032356_add_studio_column_to_games_table extends Migration
{
     /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('games', 'studio_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('games', 'studio_id');
    }
}
