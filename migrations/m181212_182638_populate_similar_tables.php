<?php

use yii\db\Migration;

/**
 * Class m181212_182638_populate_similar_tables
 */
class m181212_182638_populate_similar_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->truncateTable('games_games');
        $this->truncateTable('movies_movies');
        $intArray = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
        $size = 2;
        $output = $this->sampling($intArray,$size);
        foreach ($output as $combo) {
            $this->insert('games_games',array(
                'games_id_1' => $combo[0],
                'games_id_2' => $combo[1],
                'count' => rand(1,100),
            ));
            $this->insert('movies_movies',array(
                'movies_id_1' => $combo[0],
                'movies_id_2' => $combo[1],
                'count' => rand(1,100),
            ));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181212_182638_populate_similar_tables cannot be reverted.\n";

        return false;
    }

    function sampling($chars, $size, $combinations = array()) {

        # if it's the first iteration, the first set 
        # of combinations is the same as the set of characters
        if (empty($combinations)) {
            foreach ($chars as $char) {
                $combinations[] = array($char);
            }
        }
    
        # we're done if we're at size 1
        if ($size == 1) {
            return $combinations;
        }
    
        # initialise array to put new values in
        $new_combinations = array();
    
        # loop through existing combinations and character set to create strings
        foreach ($combinations as $combination) {
            foreach ($chars as $char) {
                $foundDuplicate = false;
                foreach ($combination as $combChar) {
                    if ($combChar == $char) {
                        $foundDuplicate = true;
                    }
                } 
                foreach ($new_combinations as $comb) {
                    if (array_count_values($comb) == array_count_values(array_merge($combination,array($char)))) {
                        $foundDuplicate = true;
                    }
                }
                if (!$foundDuplicate) {
                    $new_combinations[] = array_merge($combination,array($char));
                }
            }
        }
    
        # call same function again for the next iteration
        return $this->sampling($chars, $size - 1, $new_combinations);
    
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181212_182638_populate_similar_tables cannot be reverted.\n";

        return false;
    }
    */
}
