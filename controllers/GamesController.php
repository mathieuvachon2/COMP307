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
use app\models\Games\Studios;

use app\components\GamesHelpers;    //helper functions for games


class GamesController extends Controller {

   

    public function actionIndex() {
        Yii::$app->view->registerCssFile('/css/gamesIndex.css');
        Yii::$app->view->registerJsFile('/js/index2.js');

        $query = Games::find();
        $games = $query -> orderBy('id') -> all();      //array of ActiveRecords for gamse
        

        //Get the genres as a list ordered by their ids
        $query = GameGenres::find();
        $genreList = $query ->orderBy('id') -> all();     //list of game genres ordered by id

        $query = Studios::find();
        $studios = $query ->orderBy('id') -> all();

        return $this->render('index',[
            'games' => $games,
            'genreList' => $genreList,
            'studios' => $studios,
        ]);
    }

    public function actionView($id) {
        Yii::$app->view->registerCssFile('/css/similar.css');
        Yii::$app->view->registerJsFile('/js/gameView.js');

        //The specific game we're looking at
        $query = Games::find();
        $game = $query -> where([
            'id' => $id,
        ])->one();

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
            $similarGame = GamesHelpers::findGameByID($gameId);                     //find ActiveRecord of similar game
            array_push($simGames,$similarGame);
        }
        
        $query = Games::find();
        $gameList = $query 
            -> select([
                'id',
                'title',
            ]) 
            -> where('id != '.$id)
            -> orderBy('id')
            -> all();

        $simGames = array_slice($simGames,0,9,true);


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

        $req = Yii::$app->request;

        //var_dump($simGames);
        $mainId = $req->post('main_id');
        $tagIds = $req->post('tag_ids');
        //var_dump($tagIds);

        $query = GamesGames::find();
         $simGamesID = $query->where([
            'games_id_1' => $mainId,
            ])->orWhere([
            'games_id_2' => $mainId,
        ]) -> orderBy([
            'count' => SORT_DESC,
        ]) -> all();

        //Get the list of all tags
        $query = GameGenres::find();
        $tagList = $query -> orderBy('id') -> all();

        $simGames = array();
        foreach ($simGamesID as $simGame) {
            $gameId = ($simGame->games_id_1 == $mainId ? $simGame->games_id_2 : $simGame->games_id_1);    //id of similar game
            $similarGame = GamesHelpers::findGameByID($gameId);                     //find ActiveRecord of similar game
            array_push($simGames,$similarGame);
        }

        foreach ($simGames as $key=>$similarGame) {

            if (isset($tagIds) && !empty($tagIds)) {
                $gameGenreIds = array();
                foreach ($similarGame->tags as $tag) {
                    array_push($gameGenreIds,$tag->game_genres_id);
                }
                foreach ($tagIds as $tag) {
                    if (!in_array($tag,$gameGenreIds)) {
                        unset($simGames[$key]);
                        break;
                    }
                }
            }
        }

        $simGames = array_slice($simGames,0,9,true);

        
        return $this->renderPartial('simList',array(
            'simGames' => $simGames,    //Similar games (ordered) (need full model/activerecord) + tags
        ));
    }

    public function actionSuggest() {
        $req = Yii::$app->request;

        //var_dump('hella');
        //$request = json_decode($req->post());

        $mainId = $req->post('mainid');
        $simIds = $req->post('simids');

        //var_dump($mainId);

        $query = GamesGames::find();
        $simRecord = array('1');

        foreach ($simIds as $similarSuggestion) {
            $simRecord = $query 
            -> where([
                'games_id_1'=>$similarSuggestion,
                'games_id_2'=>$mainId,
            ])
            -> orWhere([
                'games_id_1'=>$mainId,
                'games_id_2'=>$similarSuggestion,
            ])
            ->all();

            if(empty($simRecord)){      //then we must add a new record
                $newSuggestion = new GamesGames();
                $newSuggestion->games_id_1 = $mainId;
                $newSuggestion->games_id_2 = $similarSuggestion;
                $newSuggestion->count      = '1';
                $newSuggestion->save();    //save to database
            }

            else{                       //we update the count
                $oldCount = $simRecord[0]->count;
                $simRecord[0]->count = ++$oldCount;
                $simRecord[0]->save();
            }
        }

        //Remove everything after success as theyre just for testing purposes
        return json_encode(array('success'=>true,'simids'=>$simIds));

    }

    public function actionSearch() {

        if (isset($_POST['studio_id'])) {
            $studio_id = $_POST['studio_id'];
        } else {
            $studio = null;
        }
        if (isset($_POST['genre_ids'])) {
            $tag_ids = $_POST['genre_ids'];
        } else {
            $tag_ids = null;
        }

        $games = Games::find();
        if (!empty($studio_id)) {
            $games->where(array('studio_id' => $studio_id));
        }

        $games = $games->with(array('studio','tags'))->all();
        foreach ($games as $key=>$game) {

            if (isset($tag_ids) && !empty($tag_ids)) {
                $gameGenreIds = array();
                foreach ($game->tags as $tag) {
                    array_push($gameGenreIds,$tag->game_genres_id);
                }
                foreach ($tag_ids as $tag) {
                    if (!in_array($tag,$gameGenreIds)) {
                        unset($games[$key]);
                        break;
                    }
                }
            }
        }
        return $this->renderPartial('table',array(
            'games' => $games,
        ));
    }

    
}

?>