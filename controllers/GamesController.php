<?php 
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Games\Games;
use app\models\Games\GameGenres;
use app\models\Games\GamesGames;
use app\models\Games\GamesGenres;

use app\components\GamesHelpers;    //helper functions for games


class GamesController extends Controller {

   

    public function actionIndex() {
        Yii::$app->view->registerCssFile('/css/gamesIndex.css');
        Yii::$app->view->registerJsFile('/js/index2.js');

        $query = Games::find();
        $games = $query -> orderBy('id') -> all();      //array of ActiveRecords for gamse
        

        //Get the genres as a list ordered by their ids
        $query = GameGenres::find();
        $genres = $query -> select('name')->orderBy('id') -> all();     //list of game genres ordered by id
        $genreList = array();

        foreach($genres as $genreName)
            array_push($genreList, $genreName->name);

        return $this->render('index',[
            'games' => $games,
            'genreList' => $genreList,
        ]);
    }

    public function actionView($id) {
        Yii::$app->view->registerCssFile('/css/similar.css');
        Yii::$app->view->registerJsFile('/js/similar.js');

        //The specific game we're looking at
        $query = Games::find();
        $game = $query -> where([
            'id' => $id,
        ])->one();

        //Get the list of all tags
        $query = GameGenres::find();
        $tagList = $query -> orderBy('id') -> all();

        $game = GamesHelpers::addTagsToGame($game,$tagList);   //add the tags to this game object

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
            $similarGame = GamesHelpers::findGameByID($gameId);                     //find ActiveRecord of similar game
            $similarGame = GamesHelpers::addTagsToGame($similarGame,$tagList);      //Add tags property to similar game record
            array_push($simGames,$similarGame);
        }
        
        $query = Games::find();
        $gameList = $query 
            -> select([
                'id',
                'title',
            ]) 
            -> orderBy('id')
            -> all();


        return $this->render('view',array(
            'game' => $game,            //The current game (need full model/activerecord) + tags
            'simGames' => $simGames,    //Similar games (ordered) (need full model/activerecord) + tags
            'gameList' => $gameList,    //Entire game list (only need ID + Title)
            'tagList' => $tagList,      //Entire tag list (id + name),
        ));
    }

    public function actionFilterbytag() {
        // use $_POST to get post data

        $simGames = array();
        echo $this->renderPartial('simList',array(
            'simGames' => $simGames,    //Similar games (ordered) (need full model/activerecord) + tags
        ));
    }

    
}

?>