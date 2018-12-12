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
        $game = new Games();

        //Similar games list
        $simGames = array();
        
        $gameList = array();
        $tagList = array();
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