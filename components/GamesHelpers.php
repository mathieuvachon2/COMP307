<?php
namespace app\components;

use app\models\games\Games;
use app\models\games\GameGenres;
use app\models\games\GamesGames;
use app\models\games\GamesGenres;

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

    //function that finds all similar games, and returns an array of their Active records to which are also appended tags
    public function findSimilarGames($id){
        //Get the list of all tags
        $query = GameGenres::find();
        $tagList = $query -> orderBy('id') -> all();

        //Get similar games to this game, and order them by descending count.
        $query = GamesGames::find();
        $simGamesID = $query->where([
            'games_id_1' => $id,
            ])->orWhere([
            'games_id_2' => $id,
        ]) -> orderBy([
            'count' => SORT_DESC,
        ]) -> all();

        $simGames = array();
        foreach ($simGamesID as $simGame) {
            $gameId = ($simGame->games_id_1 == $id ? $simGame->games_id_2 : $simGame->games_id_1);    //id of similar game
            $similarGame = findGameByID($gameId);                     //find ActiveRecord of similar game
            $similarGame = addTagsToGame($similarGame,$tagList);      //Add tags property to similar game record
            array_push($simGames,$similarGame);
        }

        return $simGames;
    }
}