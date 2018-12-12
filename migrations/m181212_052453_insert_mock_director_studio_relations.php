<?php

use yii\db\Migration;

/**
 * Class m181212_052453_insert_mock_director_studio_relations
 */
class m181212_052453_insert_mock_director_studio_relations extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('movies',array('director_id' => '1') ,'title=\'Pineapple Express\'');

        $this->update('movies',array('director_id' => '3') ,'title=\'The Incredibles\'');

        $this->update('movies',array('director_id' => '3') ,'title=\'Incredibles 2\'');

        $this->update('movies',array('director_id' => '2') ,'title=\'Shutter\'');

        $this->update('games',array('studio_id' => '2') ,'title=\'Fortnite\'');

        $this->update('games',array('studio_id' => '1') ,'title=\'The Elder Scrolls V: Skyrim\'');

        $this->update('games',array('studio_id' => '4') ,'title=\'The Legend of Zelda: Breath of the Wild\'');

        $this->update('games',array('studio_id' => '3') ,'title=\'Counter-Strike: Global Offensive\'');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181212_052453_insert_mock_director_studio_relations cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181212_052453_insert_mock_director_studio_relations cannot be reverted.\n";

        return false;
    }
    */
}
