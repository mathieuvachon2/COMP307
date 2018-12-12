<?php

use yii\db\Migration;

/**
 * Class m181212_193857_insert_mock_data_movies_relations
 */
class m181212_193857_insert_mock_data_movies_relations extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //add movies_genres relations
        $this->insert('movies_genres',[
            'movies_id' => 5,
            'movie_genres_id' => 5
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 5,
            'movie_genres_id' => 3
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 5,
            'movie_genres_id' => 11
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 6,
            'movie_genres_id' => 5
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 6,
            'movie_genres_id' => 3
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 6,
            'movie_genres_id' => 11
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 6,
            'movie_genres_id' => 13
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 7,
            'movie_genres_id' => 5
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 7,
            'movie_genres_id' => 3
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 7,
            'movie_genres_id' => 12
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 7,
            'movie_genres_id' => 13
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 8,
            'movie_genres_id' => 5
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 8,
            'movie_genres_id' => 9
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 8,
            'movie_genres_id' => 8
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 8,
            'movie_genres_id' => 13
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 9,
            'movie_genres_id' => 5
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 9,
            'movie_genres_id' => 4
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 9,
            'movie_genres_id' => 13
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 10,
            'movie_genres_id' => 5
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 10,
            'movie_genres_id' => 3
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 10,
            'movie_genres_id' => 4
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 10,
            'movie_genres_id' => 13
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 11,
            'movie_genres_id' => 8
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 11,
            'movie_genres_id' => 14
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 12,
            'movie_genres_id' => 2
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 13,
            'movie_genres_id' => 2
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 13,
            'movie_genres_id' => 8
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 14,
            'movie_genres_id' => 2
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 14,
            'movie_genres_id' => 8
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 15,
            'movie_genres_id' => 8
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 15,
            'movie_genres_id' => 1
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 15,
            'movie_genres_id' => 7
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 16,
            'movie_genres_id' => 1
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 16,
            'movie_genres_id' => 4
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 17,
            'movie_genres_id' => 1
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 17,
            'movie_genres_id' => 7
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 18,
            'movie_genres_id' => 9
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 18,
            'movie_genres_id' => 4
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 19,
            'movie_genres_id' => 9
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 19,
            'movie_genres_id' => 8
        ]);


        $this->insert('movies_genres',[
            'movies_id' => 20,
            'movie_genres_id' => 10
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 20,
            'movie_genres_id' => 8
        ]);

        $this->insert('movies_genres',[
            'movies_id' => 20,
            'movie_genres_id' => 12
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181212_193857_insert_mock_data_movies_relations cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181212_193857_insert_mock_data_movies_relations cannot be reverted.\n";

        return false;
    }
    */
}
