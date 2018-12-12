<?php
namespace app\components;

use app\models\Games\Games;
use app\models\Games\GameGenres;
use app\models\Games\GamesGames;
use app\models\Games\GamesGenres;

class GamesHelpers
{
    //helper function to find append a tags array to the games record
    public function addTagsToGame($game, $tagList){
        //Find tags associated to this game
        $id = $game->id;

        //find tag list associated to this game
        $query = GamesGenres::find();
        $gameGenres = $query -> select('game_genres_id') 
                            ->where([
            'games_id' => $id,
        ]) ->all();  

        $game->tags = array();      

        foreach ($gameGenres as $genre) {   //for each genre attached to the game we save its ActiveRecord in the tags array
            array_push($game->tags,$tagList[intval($genre->game_genres_id)-1]);
        }
        return $game;
    }

    //function that finds the ActiveRecord of a game given an id
    public function findGameByID($id){
    	//The specific game we're looking at
        $query = Games::find();
        $game = $query -> where([
            'id' => $id,
        ])->one();

        return $game;
    }
}