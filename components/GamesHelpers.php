<?php
namespace app\components;

use app\models\Games\Games;
use app\models\Games\GameGenres;
use app\models\Games\GamesGames;
use app\models\Games\GamesGenres;

class GamesHelpers
{
    //function that finds the ActiveRecord of a game given an id
    public static function findGameByID($id){
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
        ]) -> with(array('tags','studio')) -> all();

        $simGames = array();
        foreach ($simGamesID as $simGame) {
            $gameId = ($simGame->games_id_1 == $id ? $simGame->games_id_2 : $simGame->games_id_1);    //id of similar game
            $similarGame = findGameByID($gameId);                     //find ActiveRecord of similar game
            array_push($simGames,$similarGame);
        }

        return $simGames;
    }
}