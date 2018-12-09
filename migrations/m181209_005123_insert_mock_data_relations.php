<?php

use yii\db\Migration;

/**
 * Class m181209_005123_insert_mock_data_relations
 */
class m181209_005123_insert_mock_data_relations extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //insert movies_genres

        $this->insert('movies_genres', [
            'movies_id' => 1,
            'movie_genres_id' => 2,
        ]);

        $this->insert('movies_genres', [
            'movies_id' => 1,
            'movie_genres_id' => 5,
        ]);

        $this->insert('movies_genres', [
            'movies_id' => 1,
            'movie_genres_id' => 9,
        ]);

        $this->insert('movies_genres', [
            'movies_id' => 2,
            'movie_genres_id' => 2,
        ]);

        $this->insert('movies_genres', [
            'movies_id' => 2,
            'movie_genres_id' => 10,
        ]);

        $this->insert('movies_genres', [
            'movies_id' => 2,
            'movie_genres_id' => 3,
        ]);

        $this->insert('movies_genres', [
            'movies_id' => 3,
            'movie_genres_id' => 2,
        ]);

        $this->insert('movies_genres', [
            'movies_id' => 3,
            'movie_genres_id' => 10,
        ]);

        $this->insert('movies_genres', [
            'movies_id' => 3,
            'movie_genres_id' => 3,
        ]);

        $this->insert('movies_genres', [
            'movies_id' => 4,
            'movie_genres_id' => 1,
        ]);

        $this->insert('movies_genres', [
            'movies_id' => 4,
            'movie_genres_id' => 7,
        ]);

        $this->insert('movies_genres', [
            'movies_id' => 4,
            'movie_genres_id' => 4,
        ]);

        //insert games_genres

        $this->insert('games_genres', [
            'games_id' => 1,
            'game_genres_id' => 9,
        ]);

        $this->insert('games_genres', [
            'games_id' => 1,
            'game_genres_id' => 11,
        ]);

        $this->insert('games_genres', [
            'games_id' => 2,
            'game_genres_id' => 12,
        ]);

        $this->insert('games_genres', [
            'games_id' => 2,
            'game_genres_id' => 13,
        ]);

        $this->insert('games_genres', [
            'games_id' => 3,
            'game_genres_id' => 3,
        ]);

        $this->insert('games_genres', [
            'games_id' => 3,
            'game_genres_id' => 5,
        ]);

        $this->insert('games_genres', [
            'games_id' => 4,
            'game_genres_id' => 5,
        ]);

        $this->insert('games_genres', [
            'games_id' => 4,
            'game_genres_id' => 14,
        ]);

        //insert games_games
        $this->insert('games_games', [
            'games_id_1' => 3,
            'games_id_2' => 4,
            'count' => 5
        ]);

        $this->insert('games_games', [
            'games_id_1' => 1,
            'games_id_2' => 2,
            'count' => 5
        ]);

        //insert movies_movies

        $this->insert('movies_movies', [
            'movies_id_1' => 2,
            'movies_id_2' => 3,
            'count' => 5
        ]);

        $this->insert('movies_movies', [
            'movies_id_1' => 1,
            'movies_id_2' => 4,
            'count' => 0
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181209_005123_insert_mock_data_relations cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181209_005123_insert_mock_data_relations cannot be reverted.\n";

        return false;
    }
    */
}
