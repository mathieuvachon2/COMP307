<?php

use yii\db\Migration;

/**
 * Class m181212_143336_mock_data_games
 */
class m181212_143336_mock_data_games extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('games',array('image_url' => 'http://media.steampowered.com/apps/csgo/blog/images/fb_image.png?v=5'),'id = 1');
        $this->update('games',array('image_url' => 'https://d1u5p3l4wpay3k.cloudfront.net/fortnite_gamepedia/thumb/8/83/Fortniteboximagestandard-hires.png/256px-Fortniteboximagestandard-hires.png?version=abec38b785491c7e2c2026a1b1a06b38'),'id = 2');
        $this->update('games',array('image_url' => 'https://www.hopculture.com/wp-content/uploads/2017/04/zelda-LEAD.jpg'),'id = 3');
        $this->update('games',array('image_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/1/15/The_Elder_Scrolls_V_Skyrim_cover.png/220px-The_Elder_Scrolls_V_Skyrim_cover.png'),'id = 4');

        //Add studios
        $this->insert('studios',array('id'=>5,'name' => 'Blizzard'));
        $this->insert('studios',array('id'=>6,'name' => 'PUBG Corporation'));
        $this->insert('studios',array('id'=>7,'name' => 'Mojang'));
        $this->insert('studios',array('id'=>8,'name' => 'NetherRealm Studios'));
        $this->insert('studios',array('id'=>9,'name' => 'Toby Fox'));
        $this->insert('studios',array('id'=>10,'name' => 'Larian Studios'));
        $this->insert('studios',array('id'=>11,'name' => 'Avalanche Studios'));
        $this->insert('studios',array('id'=>12,'name' => 'Behaviour Interactive'));
        $this->insert('studios',array('id'=>13,'name' => 'Psyonix'));
        $this->insert('studios',array('id'=>14,'name' => 'Rockstar Games'));
        $this->insert('studios',array('id'=>15,'name' => 'Ubisoft'));
        $this->insert('studios',array('id'=>16,'name' => 'Capcom'));
        $this->insert('studios',array('id'=>17,'name' => 'Techland'));
        $this->insert('studios',array('id'=>18,'name' => 'IO Interactive'));

    

        //Add games
        $this->insert('games',array(
            'title'=>'Diablo 2',
            'description'=>'Diablo II is an action role-playing hack and slash video game developed by Blizzard North and published by Blizzard Entertainment in 2000 for Microsoft Windows, Classic Mac OS, and macOS. The game, with its dark fantasy and horror themes, was conceptualized and designed by David Brevik and Erich Schaefer, who with Max Schaefer acted as project leads on the game. The producers were Matthew Householder and Bill Roper.',
            'year' => '2000',
            'studio_id' => 5,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/d/d5/Diablo_II_Coverart.png/220px-Diablo_II_Coverart.png')
        );
        $this->insert('games',array(
            'title'=>'Dota 2',
            'description'=>'Dota 2 is played in matches between two teams of five players, with each team occupying and defending their own separate base on the map. Each of the ten players independently controls a powerful character, known as a "hero", who all have unique abilities and differing styles of play. During a match, players collect experience points and items for their heroes to successfully defeat the opposing team\'s heroes in player versus player combat. A team wins by being the first to destroy a large structure located in the opposing team\'s base, called the "Ancient".',
            'year' => '2013',
            'studio_id' => 3,
            'image_url' => 'https://cdn-images-1.medium.com/max/1191/0*vbw4wQW_Xq2_3eOo.jpg')
        );
        $this->insert('games',array(
            'title'=>'PlayerUnknown\'s Battlegrounds',
            'description'=>'The game is based on previous mods that were created by Brendan "PlayerUnknown" Greene for other games using the film Battle Royale for inspiration, and expanded into a standalone game under Greene\'s creative direction. In the game, up to one hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding getting killed themselves. The available safe area of the game\'s map decreases in size over time, directing surviving players into tighter areas to force encounters. The last player or team standing wins the round.',
            'year' => '2017',
            'studio_id' => 6,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSesMRBwA7vUnqVpOic__ZwqYfLd7q-tpp2dbfNc1KHGRdJtOrNgg')
        );
        $this->insert('games',array(
            'title'=>'Minecraft',
            'description'=>'Minecraft is a 2011 sandbox video game created by Swedish game developer Markus Persson and later developed by Mojang. The game allows players to build with a variety of different blocks in a 3D procedurally generated world, requiring creativity from players. Other activities in the game include exploration, resource gathering, crafting, and combat.',
            'year' => '2011',
            'studio_id' => 7,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlDvkZn3P821fbsMsB4QGfaM-eHfeVcXAbgUI5nmngcxYAgPMk')
        );
        $this->insert('games',array(
            'title'=>'Mortal Kombat X',
            'description'=>'Like previous Mortal Kombat games, Mortal Kombat X\'s gameplay consists of two players, or one player and the CPU, fighting against each other with their selected character, using a large, varied array of character specific attacks. The game contains several modes, such as a story mode, which takes place twenty-five years after the previous Mortal Kombat game, several \'Tower\' modes, which feature dynamically changing challenges, numerous online modes, and the \'Krypt\', a mode played in a first-person perspective where players explore the areas unlocking a variety of in-game items.',
            'year' => '2015',
            'studio_id' => 8,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/d/d0/Mortal_Kombat_X_Cover_Art.png/220px-Mortal_Kombat_X_Cover_Art.png')
        );
        $this->insert('games',array(
            'title'=>'Undertale',
            'description'=>'Players control a child who has fallen into the Underground, a large, secluded region under the surface of the Earth, separated by a magic barrier. The player meets various monsters during a quest to return to the surface, mainly through the combat system; the player navigates through mini-bullet hell attacks by the opponent, and can opt to pacify or subdue monsters in order to spare them instead of murdering them. These choices affect the game, with the dialogue, characters, and story changing based on outcomes.',
            'year' => '2015',
            'studio_id' => 9,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlBxncDKtDmSW6NyjTfxXcJjDHheYEoTW2qA-j5BG0dT9OW02E')
        );
        $this->insert('games',array(
            'title'=>'Divinity: Original Sin 2',
            'description'=>'The sequel to 2014\'s Divinity: Original Sin, it was released for Microsoft Windows in September 2017, and for PlayStation 4 and Xbox One, alongside an enhanced edition for Windows, in August 2018. The game received universal acclaim, with many critics praising its complexity and interactivity, considering it to be one of the best role-playing games of all time. It was also a commercial success, selling over a million copies in two months.',
            'year' => '2017',
            'studio_id' => 10,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/4/48/Divinity_Original_Sin_2_cover_art.jpg/220px-Divinity_Original_Sin_2_cover_art.jpg')
        );
        $this->insert('games',array(
            'title'=>'Just Cause 4',
            'description'=>'The game is set in a fictional South American country called Solís, which is home to very extreme weather.[4] Rico Rodriguez takes on the Black Hand, the world\'s most powerful private army run by Gabriela Morales, a newly introduced character.[4] The Black Hand served as a mercenary group to dictators Salvador Mendoza of Just Cause and Sebastiano Di Ravello in Just Cause 3. When Rico is shown evidence that his late father was working with The Black Hand, he plunges into the South American nation of Solís, the homeland of the Black Hand in search of answers.',
            'year' => '2018',
            'studio_id' => 11,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/0/0f/Just_Cause_4_cover.jpg/220px-Just_Cause_4_cover.jpg')
        );
        $this->insert('games',array(
            'title'=>'Dead By Daylight',
            'description'=>'The game is played exclusively as a one versus four (1 v. 4) online multiplayer where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught and sacrificed to the Entity.',
            'year' => '2016',
            'studio_id' => 12,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9uOrQldCmSMuDaCbMxVDopZpqctl7ojFUPE_GCbE36jL969pWnQ')
        );
        $this->insert('games',array(
            'title'=>'Rocket League',
            'description'=>'Described as "soccer, but with rocket-powered cars", Rocket League has one to four players assigned to each of the two teams, using rocket-powered vehicles to hit a ball into their opponent\'s goal and score points over the course of a match. The game includes single-player and multiplayer modes which can be played both locally and online, including cross-platform play between the PlayStation 4 and Microsoft Windows versions, as well as cross-play between Xbox One, Switch, and Windows versions.',
            'year' => '2015',
            'studio_id' => 13,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/e/e8/Rocket_League.jpg/220px-Rocket_League.jpg')
        );
        $this->insert('games',array(
            'title'=>'Grand Theft Auto V',
            'description'=>'Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three criminals and their efforts to commit heists while under pressure from a government agency. The open world design lets players freely roam San Andreas\' open countryside and the fictional city of Los Santos, based on Los Angeles.',
            'year' => '2013',
            'studio_id' => 14,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/a/a5/Grand_Theft_Auto_V.png/220px-Grand_Theft_Auto_V.png')
        );
        $this->insert('games',array(
            'title'=>'Ghost Recon Wildlands',
            'description'=>'The game moves away from the futuristic setting introduced in Tom Clancy\'s Ghost Recon Advanced Warfighter and instead features a setting similar to the original Tom Clancy\'s Ghost Recon. Ubisoft described it as one of the biggest open world games that they have published, with the game world including a wide variety of environments such as mountains, forests, deserts, and salt flats.',
            'year' => '2017',
            'studio_id' => 15,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/b/b9/Ghost_Recon_Wildlands_cover_art.jpg/220px-Ghost_Recon_Wildlands_cover_art.jpg')
        );
        $this->insert('games',array(
            'title'=>'Monster Hunter: World',
            'description'=>'In the game, the player takes the role of a Hunter, tasked to hunt down and either kill or trap monsters that roam in one of several environmental spaces. If successful, the player is rewarded through loot consisting of parts from the monster and other elements that are used to craft weapons and armor, amongst other equipment. The game\'s core loop has the player crafting appropriate gear to be able to hunt down more difficult monsters, which in turn provide parts that lead to more powerful gear. Players may hunt alone, or can hunt in cooperative groups of up to four players via the game\'s online services.',
            'year' => '2018',
            'studio_id' => 16,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/1/1b/Monster_Hunter_World_cover_art.jpg/220px-Monster_Hunter_World_cover_art.jpg')
        );
        $this->insert('games',array(
            'title'=>'Dying Light',
            'description'=>'The game revolves around an undercover agent named Kyle Crane who is sent to infiltrate a quarantine zone in a city called Harran. It features an enemy-infested, open-world city with a dynamic day and night cycle, with climbable structures that support a fluid parkour system. The day-night cycle changes the game drastically, as the zombies become more aggressive and more difficult to deal with during night time. The gameplay is focused on weapons-based combat and parkour.',
            'year' => '2015',
            'studio_id' => 17,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/c/c0/Dying_Light_cover.jpg/220px-Dying_Light_cover.jpg')
        );
        $this->insert('games',array(
            'title'=>'Left 4 Dead 2',
            'description'=>'Left 4 Dead 2 builds upon cooperatively focused gameplay and Valve\'s proprietary Source engine, the same game engine used in the original Left 4 Dead. Set during the aftermath of an apocalyptic pandemic, Left 4 Dead 2 focuses on four new Survivors, fighting against hordes of zombies, known as the Infected, who develop severe psychosis and act extremely aggressive. The Survivors must fight their way through five campaigns, interspersed with safe houses that act as checkpoints, with the goal of escape at each campaign\'s finale.',
            'year' => '2009',
            'studio_id' => 3,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/b/ba/Left4Dead2.jpg/220px-Left4Dead2.jpg')
        );
        $this->insert('games',array(
            'title'=>'Hitman 2',
            'description'=>'Following the events of Hitman, Agent 47 embarks on a mission to hunt the mysterious "Shadow Client" and disassemble his militia. His first lead is the location of one of the Shadow Client\'s lieutenants, Alma Reynard. 47 is able to gain some intel on the Shadow Client\'s activities from Reynard\'s home in New Zealand before eliminating her. Impressed with 47\'s performance, Providence authorizes him and the ICA to hunt down the rest of the Shadow Client\'s militia.',
            'year' => '2018',
            'studio_id' => 18,
            'image_url' => '//upload.wikimedia.org/wikipedia/en/thumb/8/88/Hitman_2_%282018%29_cover.jpg/220px-Hitman_2_%282018%29_cover.jpg')
        );

        //New game genres
        $this->insert('game_genres',array(
            'id'=>15,
            'name'=> 'hack n\' slash',
        ));
        $this->insert('game_genres',array(
            'id'=>16,
            'name'=> 'competitive',
        ));
        $this->insert('game_genres',array(
            'id'=>17,
            'name'=> 'story',
        ));
        $this->insert('game_genres',array(
            'id'=>18,
            'name'=> 'creative',
        ));
        $this->insert('game_genres',array(
            'id'=>19,
            'name'=> 'fighter',
        ));
        $this->insert('game_genres',array(
            'id'=>20,
            'name'=> 'singleplayer',
        ));
        $this->insert('game_genres',array(
            'id'=>21,
            'name'=> 'tactical',
        ));

        //Setup game - genre relations
        $this->insert('games_genres',array(
            'games_id' => 1,
            'game_genres_id' => 16,
        ));
        $this->insert('games_genres',array(
            'games_id' => 3,
            'game_genres_id' => 17,
        ));
        $this->insert('games_genres',array(
            'games_id' => 4,
            'game_genres_id' => 3,
        ));
        $this->insert('games_genres',array(
            'games_id' => 5,
            'game_genres_id' => 5,
        ));
        $this->insert('games_genres',array(
            'games_id' => 5,
            'game_genres_id' => 14,
        ));
        $this->insert('games_genres',array(
            'games_id' => 5,
            'game_genres_id' => 15,
        ));
        $this->insert('games_genres',array(
            'games_id' => 6,
            'game_genres_id' => 10,
        ));
        $this->insert('games_genres',array(
            'games_id' => 6,
            'game_genres_id' => 16,
        ));
        $this->insert('games_genres',array(
            'games_id' => 7,
            'game_genres_id' => 12,
        ));
        $this->insert('games_genres',array(
            'games_id' => 7,
            'game_genres_id' => 13,
        ));
        $this->insert('games_genres',array(
            'games_id' => 8,
            'game_genres_id' => 13,
        ));
        $this->insert('games_genres',array(
            'games_id' => 8,
            'game_genres_id' => 3,
        ));
        $this->insert('games_genres',array(
            'games_id' => 8,
            'game_genres_id' => 18,
        ));
        $this->insert('games_genres',array(
            'games_id' => 9,
            'game_genres_id' => 19,
        ));
        $this->insert('games_genres',array(
            'games_id' => 9,
            'game_genres_id' => 5,
        ));
        $this->insert('games_genres',array(
            'games_id' => 9,
            'game_genres_id' => 16,
        ));
        $this->insert('games_genres',array(
            'games_id' => 10,
            'game_genres_id' => 8,
        ));
        $this->insert('games_genres',array(
            'games_id' => 10,
            'game_genres_id' => 14,
        ));
        $this->insert('games_genres',array(
            'games_id' => 10,
            'game_genres_id' => 20,
        ));
        $this->insert('games_genres',array(
            'games_id' => 11,
            'game_genres_id' => 20,
        ));
        $this->insert('games_genres',array(
            'games_id' => 11,
            'game_genres_id' => 14,
        ));
        $this->insert('games_genres',array(
            'games_id' => 12,
            'game_genres_id' => 20,
        ));
        $this->insert('games_genres',array(
            'games_id' => 12,
            'game_genres_id' => 3,
        ));
        $this->insert('games_genres',array(
            'games_id' => 12,
            'game_genres_id' => 5,
        ));
        $this->insert('games_genres',array(
            'games_id' => 13,
            'game_genres_id' => 1,
        ));
        $this->insert('games_genres',array(
            'games_id' => 13,
            'game_genres_id' => 9,
        ));
        $this->insert('games_genres',array(
            'games_id' => 13,
            'game_genres_id' => 4,
        ));
        $this->insert('games_genres',array(
            'games_id' => 14,
            'game_genres_id' => 16,
        ));
        $this->insert('games_genres',array(
            'games_id' => 14,
            'game_genres_id' => 8,
        ));
        $this->insert('games_genres',array(
            'games_id' => 14,
            'game_genres_id' => 6,
        ));
        $this->insert('games_genres',array(
            'games_id' => 15,
            'game_genres_id' => 3,
        ));
        $this->insert('games_genres',array(
            'games_id' => 15,
            'game_genres_id' => 5,
        ));
        $this->insert('games_genres',array(
            'games_id' => 15,
            'game_genres_id' => 9,
        ));
        $this->insert('games_genres',array(
            'games_id' => 16,
            'game_genres_id' => 11,
        ));
        $this->insert('games_genres',array(
            'games_id' => 16,
            'game_genres_id' => 9,
        ));
        $this->insert('games_genres',array(
            'games_id' => 16,
            'game_genres_id' => 21,
        ));
        $this->insert('games_genres',array(
            'games_id' => 17,
            'game_genres_id' => 5,
        ));
        $this->insert('games_genres',array(
            'games_id' => 17,
            'game_genres_id' => 14,
        ));
        $this->insert('games_genres',array(
            'games_id' => 17,
            'game_genres_id' => 9,
        ));
        $this->insert('games_genres',array(
            'games_id' => 18,
            'game_genres_id' => 1,
        ));
        $this->insert('games_genres',array(
            'games_id' => 18,
            'game_genres_id' => 5,
        ));
        $this->insert('games_genres',array(
            'games_id' => 18,
            'game_genres_id' => 14,
        ));
        $this->insert('games_genres',array(
            'games_id' => 19,
            'game_genres_id' => 14,
        ));
        $this->insert('games_genres',array(
            'games_id' => 19,
            'game_genres_id' => 1,
        ));
        $this->insert('games_genres',array(
            'games_id' => 19,
            'game_genres_id' => 11,
        ));
        $this->insert('games_genres',array(
            'games_id' => 20,
            'game_genres_id' => 20,
        ));
        $this->insert('games_genres',array(
            'games_id' => 20,
            'game_genres_id' => 21,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181212_143336_mock_data_games cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181212_143336_mock_data_games cannot be reverted.\n";

        return false;
    }
    */
}
