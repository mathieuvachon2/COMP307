<?php

use yii\db\Migration;

/**
 * Class m181212_174521_insert_mock_data_movies
 */
class m181212_174521_insert_mock_data_movies extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //add directors to people

        //4
        $this->insert('people',[
            'id' => 4,
            'first_name' => 'Christopher',
            'last_name' => 'Nolan'
        ]);
        //5
        $this->insert('people',[
            'id' => 5,
            'first_name' => 'Ryan',
            'last_name' => 'Coogler'
        ]);

        //6
        $this->insert('people',[
            'id' => 6,
            'first_name' => 'Anthony',
            'last_name' => 'Russo'
        ]);

        //7
        $this->insert('people',[
            'id' => 7,
            'first_name' => 'Stephen',
            'last_name' => 'Chbosky'
        ]);

        //8
        $this->insert('people',[
            'id' => 8,
            'first_name' => 'Mark',
            'last_name' => 'Waters'
        ]);

        //9
        $this->insert('people',[
            'id' => 9,
            'first_name' => 'Nat',
            'last_name' => 'Faxon'
        ]);

        //10
        $this->insert('people',[
            'id' => 10,
            'first_name' => 'John',
            'last_name' => 'Hughes'
        ]);

        //11
        $this->insert('people',[
            'id' => 11,
            'first_name' => 'Charles',
            'last_name' => 'Guard'
        ]);

        //12
        $this->insert('people',[
            'id' => 12,
            'first_name' => 'James',
            'last_name' => 'DeMonaco'
        ]);

        //13
        $this->insert('people',[
            'id' => 13,
            'first_name' => 'James',
            'last_name' => 'Wan'
        ]);

        //14
        $this->insert('people',[
            'id' => 14,
            'first_name' => 'Steven',
            'last_name' => 'Soderbergh'
        ]);

        //15
        $this->insert('people',[
            'id' => 15,
            'first_name' => 'Quentin',
            'last_name' => 'Tarantino'
        ]);

        //16
        $this->insert('people',[
            'id' => 16,
            'first_name' => 'Makoto',
            'last_name' => 'Shinkai'
        ]);

        //add new movie_genres

        //11
        $this->insert('movie_genres',[
            'id' => 11,
            'name' => 'sci-fi'
        ]);

        //12
        $this->insert('movie_genres',[
            'id' => 12,
            'name' => 'fantasy'
        ]);

        //13
        $this->insert('movie_genres',[
            'id' => 13,
            'name' => 'superhero'
        ]);

        //14
        $this->insert('movie_genres',[
            'id' => 14,
            'name' => 'romance'
        ]);


        //add movies

        //5
        $this->insert('movies',array(
            'id' => 5,
            'title'=>'Inception',
            'description'=>'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.',
            'year' => '2010',
            'director_id' => 4,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/2/2e/Inception_%282010%29_theatrical_poster.jpg')
        );

        //6
        $this->insert('movies',array(
            'id' => 6,
            'title'=>'Black Panther',
            'description'=>'\'T\'Challa, heir to the hidden but advanced kingdom of Wakanda, must step forward to lead his people into a new future and must confront a challenger from his country\'s past.',
            'year' => '2018',
            'director_id' => 5,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/0/0c/Black_Panther_film_poster.jpg')
        );

        //7
        $this->insert('movies',array(
            'id' => 7,
            'title'=>'Avengers: Infinity Wars',
            'description'=>'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.',
            'year' => '2018',
            'director_id' => 6,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/4/4d/Avengers_Infinity_War_poster.jpg')
        );

        //8
        $this->insert('movies',array(
            'id' => 8,
            'title'=>'The Dark Knight',
            'description'=>'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
            'year' => '2008',
            'director_id' => 4,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/8/8a/Dark_Knight.jpg')
        );

        //9
        $this->insert('movies',array(
            'id' => 9,
            'title'=>'The Dark Knight Rises',
            'description'=>'Eight years after the Joker\'s reign of anarchy, Batman, with the help of the enigmatic Catwoman, is forced from his exile to save Gotham City, now on the edge of total annihilation, from the brutal guerrilla terrorist Bane.',
            'year' => '2012',
            'director_id' => 4,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/8/83/Dark_knight_rises_poster.jpg')
        );

        //10
        $this->insert('movies',array(
            'id' => 10,
            'title'=>'Batman Begins',
            'description'=>'After training with his mentor, Batman begins his fight to free crime-ridden Gotham City from corruption.',
            'year' => '2005',
            'director_id' => 4,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/a/af/Batman_Begins_Poster.jpg/220px-Batman_Begins_Poster.jpg')
        );

        //11
        $this->insert('movies',array(
            'id' => 11,
            'title'=>'The Perks of Being a Wallflower',
            'description'=>'An introvert freshman is taken under the wings of two seniors who welcome him to the real world.',
            'year' => '2012',
            'director_id' => 7,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/0/0b/The_Perks_of_Being_a_Wallflower_Poster.jpg')
        );

        //12
        $this->insert('movies',array(
            'id' => 12,
            'title'=>'Mean Girls',
            'description'=>'Cady Heron is a hit with The Plastics, the A-list girl clique at her new school, until she makes the mistake of falling for Aaron Samuels, the ex-boyfriend of alpha Plastic Regina George.',
            'year' => '2004',
            'director_id' => 8,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/a/ac/Mean_Girls_film_poster.png/220px-Mean_Girls_film_poster.png')
        );

        //13
        $this->insert('movies',array(
            'id' => 13,
            'title'=>'The Way, Way Back',
            'description'=>'Shy 14-year-old Duncan goes on summer vacation with his mother, her overbearing boyfriend, and her boyfriend\'s daughter. Having a rough time fitting in, Duncan finds an unexpected friend in Owen, manager of the Water Wizz water park.',
            'year' => '2013',
            'director_id' => 9,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/2/2b/The_Way%2C_Way_Back_Poster.jpg')
        );

        //14
        $this->insert('movies',array(
            'id' => 14,
            'title'=>'The Breakfast Club',
            'description'=>'Five high school students meet in Saturday detention and discover how they have a lot more in common than they thought.',
            'year' => '1985',
            'director_id' => 10,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/5/50/The_Breakfast_Club.jpg/220px-The_Breakfast_Club.jpg')
        );

        //15
        $this->insert('movies',array(
            'id' => 15,
            'title'=>'The Uninvited',
            'description'=>'Anna returns home after a stint in a mental hospital, but her recovery is jeopardized by her cruel stepmother and ghastly visions of her dead mother.',
            'year' => '2009',
            'director_id' => 11,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/6/60/The_Uninvited_%282009_film%29.jpg/215px-The_Uninvited_%282009_film%29.jpg')
        );

        //16
        $this->insert('movies',array(
            'id' => 16,
            'title'=>'The Purge',
            'description'=>'A wealthy family are held hostage for harboring the target of a murderous syndicate during the Purge, a 12-hour period in which any and all crime is legal.',
            'year' => '2013',
            'director_id' => 12,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/9/94/The_Purge_film_poster.jpg/220px-The_Purge_film_poster.jpg')
        );

        //17
        $this->insert('movies',array(
            'id' => 17,
            'title'=>'Saw',
            'description'=>'Two strangers, who awaken in a room with no recollection of how they got there, soon discover they\'re pawns in a deadly game perpetrated by a notorious serial killer.',
            'year' => '2004',
            'director_id' => 13,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/5/56/Saw_official_poster.jpg/220px-Saw_official_poster.jpg')
        );

        //18
        $this->insert('movies',array(
            'id' => 18,
            'title'=>'Ocean\'s Eleven',
            'description'=>'Danny Ocean and his eleven accomplices plan to rob three Las Vegas casinos simultaneously.',
            'year' => '2001',
            'director_id' => 14,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/6/68/Ocean%27s_Eleven_2001_Poster.jpg/220px-Ocean%27s_Eleven_2001_Poster.jpg')
        );

        //19
        $this->insert('movies',array(
            'id' => 19,
            'title'=>'Pulp Fiction',
            'description'=>'The lives of two mob hitmen, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
            'year' => '1994',
            'director_id' => 15,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/3/3b/Pulp_Fiction_%281994%29_poster.jpg')
        );

        //20
        $this->insert('movies',array(
            'id' => 20,
            'title'=>'Your Name',
            'description'=>'Two strangers find themselves linked in a bizarre way. When a connection forms, will distance be the only thing to keep them apart?',
            'year' => '2016',
            'director_id' => 16,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/0/0b/Your_Name_poster.png')
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181212_174521_insert_mock_data_movies cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181212_174521_insert_mock_data_movies cannot be reverted.\n";

        return false;
    }
    */
}
