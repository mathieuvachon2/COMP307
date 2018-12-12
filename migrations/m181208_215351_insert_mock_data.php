<?php

use yii\db\Migration;

/**
 * Class m181208_215351_insert_mock_data
 */
class m181208_215351_insert_mock_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //insert movie genres

        //1
        $this->insert('movie_genres', [
            'name' => 'horror',
        ]);

        //2
        $this->insert('movie_genres', [
            'name' => 'comedy',
        ]);

        //3
        $this->insert('movie_genres', [
            'name' => 'adventure',
        ]);

        //4
        $this->insert('movie_genres', [
            'name' => 'thriller',
        ]);

        //5
        $this->insert('movie_genres', [
            'name' => 'action',
        ]);

        //6
        $this->insert('movie_genres', [
            'name' => 'sports',
        ]);

        //7
        $this->insert('movie_genres', [
            'name' => 'mystery',
        ]);

        //8
        $this->insert('movie_genres', [
            'name' => 'drama',
        ]);

        //9
        $this->insert('movie_genres', [
            'name' => 'crime',
        ]);

        //10
        $this->insert('movie_genres', [
            'name' => 'animation',
        ]);


        //insert game genres

        $this->insert('game_genres', [
            'name' => 'horror',
        ]);

        $this->insert('game_genres', [
            'name' => 'comedy',
        ]);

        $this->insert('game_genres', [
            'name' => 'adventure',
        ]);

        $this->insert('game_genres', [
            'name' => 'thriller',
        ]);

        $this->insert('game_genres', [
            'name' => 'action',
        ]);

        $this->insert('game_genres', [
            'name' => 'sports',
        ]);

        $this->insert('game_genres', [
            'name' => 'mystery',
        ]);

        $this->insert('game_genres', [
            'name' => 'arcade',
        ]);

        $this->insert('game_genres', [
            'name' => 'multiplayer',
        ]);

        $this->insert('game_genres', [
            'name' => 'multiplayer online battle arena',
        ]);

        $this->insert('game_genres', [
            'name' => '1st person shooter',
        ]);

        $this->insert('game_genres', [
            'name' => 'battle royale',
        ]);

        $this->insert('game_genres', [
            'name' => 'survival',
        ]);

        $this->insert('game_genres', [
            'name' => 'role playing game',
        ]);

        //insert movies

        $this->insert('movies', [
            'title' => 'Pineapple Express',
            'description' => 'A process server and his marijuana dealer wind up on the run from hitmen and a corrupt police officer after he witnesses his dealer\'s boss murder a competitor while trying to serve papers on him.',
            'year' => 2008
        ]);

        $this->insert('movies', [
            'title' => 'The Incredibles',
            'description' => 'A family of undercover superheroes, while trying to live the quiet suburban life, are forced into action to save the world.',
            'year' => 2004
        ]);

        $this->insert('movies', [
            'title' => 'Incredibles 2',
            'description' => 'Bob Parr (Mr. Incredible) is left to care for the kids while Helen (Elastigirl) is out saving the world.',
            'year' => 2018
        ]);

        $this->insert('movies', [
            'title' => 'Shutter',
            'description' => 'A young photographer and his girlfirend discover mysterious shadows in their photographs after a tragic accident. They soon learn that you can not escape your past.',
            'year' => 2004
        ]);

        //insert games

        $this->insert('games', [
            'title' => 'Counter-Strike: Global Offensive',
            'description' => 'Counter-Strike: Global Offensive is a multiplayer first-person shooter video game developed by Hidden Path Entertainment and Valve Corporation.',
            'year' => 2012
        ]);

        $this->insert('games', [
            'title' => 'Fortnite',
            'description' => 'Fortnite Battle Royale is the FREE 100-player PvP mode in Fortnite. One giant map. A battle bus. Fortnite building skills and destructible environments combined with intense PvP combat.',
            'year' => 2017
        ]);

        $this->insert('games', [
            'title' => 'The Legend of Zelda: Breath of the Wild',
            'description' => 'The Legend of Zelda: Breath of the Wild is an open world action-adventure game developed and published by Nintendo. An entry in the longrunning The Legend of Zelda series, this masterpiece is one of the top rated games of 2017.',
            'year' => 2017
        ]);

        $this->insert('games', [
            'title' => 'The Elder Scrolls V: Skyrim',
            'description' => 'The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.',
            'year' => 2011
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181208_215351_insert_mock_data cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181208_215351_insert_mock_data cannot be reverted.\n";

        return false;
    }
    */
}
