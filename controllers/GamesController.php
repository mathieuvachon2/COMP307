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
        $query = Games::find();
        $games = $query -> orderBy('id') -> all();

        //Get the genres as a list ordered by their ids
        $query = GameGenres::find();
        $genres = $query -> orderBy('id') -> all();

        return $this->render('index',array(
            //PLACE VARIABLES HERE
        ));
    }

    public function actionView($id) {
        Yii::$app->view->registerCssFile('/css/similar.css');
        Yii::$app->view->registerJsFile('/js/similar.js');
        return $this->render('view',array(
            //PLACE VARIABLES HERE
        ));
    }
}

?>