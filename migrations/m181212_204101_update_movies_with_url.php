<?php

use yii\db\Migration;

/**
 * Class m181212_204101_update_movies_with_url
 */
class m181212_204101_update_movies_with_url extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('movies',array('image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/c/ca/Pineapple_Express_Poster.jpg/220px-Pineapple_Express_Poster.jpg'),'id = 1');
        $this->update('movies',array('image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/e/ec/The_Incredibles.jpg/220px-The_Incredibles.jpg'),'id = 2');
        $this->update('movies',array('image_url' => '//upload.wikimedia.org/wikipedia/en/2/27/The_Incredibles_2.jpg'),'id = 3');
        $this->update('movies',array('image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/4/45/Shutterposter.jpg/220px-Shutterposter.jpg'),'id = 4');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181212_204101_update_movies_with_url cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181212_204101_update_movies_with_url cannot be reverted.\n";

        return false;
    }
    */
}
