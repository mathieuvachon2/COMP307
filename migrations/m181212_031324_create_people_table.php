<?php

use yii\db\Migration;

/**
 * Handles the creation of table `director`.
 */
class m181212_031324_create_people_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('people', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(64)->notNull(),
            'middle_names' => $this->string(64),
            'last_name' => $this->string(64),
            'gender' => $this->string(64)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('people');
    }
}
