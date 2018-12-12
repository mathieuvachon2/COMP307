<?php

use yii\db\Migration;

/**
 * Class m181212_033700_insert_mock_director_studio_data
 */
class m181212_033700_insert_mock_director_studio_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        //insert into person
        $this->insert('people', [
            'first_name' => 'David',
            'middle_names' => 'Gordon',
            'last_name' => 'Green'
        ]);

        $this->insert('people', [
            'first_name' => 'Banjong',
            'last_name' => 'Pisanthanakun'
        ]);

        $this->insert('people', [
            'first_name' => 'Brad',
            'last_name' => 'Bird'
        ]);

        //insert into studio
        $this->insert('studios', [
            'name' => 'Bethesda Game Studios',
        ]);

        $this->insert('studios', [
            'name' => 'Epic Games',
        ]);

        $this->insert('studios', [
            'name' => 'Valve Corporation',
        ]);

        $this->insert('studios', [
            'name' => 'Nintendo',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181212_033700_insert_mock_director_studio_data cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181212_033700_insert_mock_director_studio_data cannot be reverted.\n";

        return false;
    }
    */
}
