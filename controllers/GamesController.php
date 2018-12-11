<?php 
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Games;

class GamesController extends Controller {

    public function actionIndex() {
        Yii::$app->view->registerCssFile('/css/gamesIndex.css');

        return $this->render('index',array(
            //PLACE VARIABLES HERE
        ));
    }

    public function actionView($id) {
        Yii::$app->view->registerCssFile('/css/similar.css');
        Yii::$app->view->registerJsFile('/js/similar.js');

        //The specific game we're looking at
        $game = Games::find()->where(['id'=>$id])->one();

        //Similar games list
        $simGames = Games::find()->all();
        
        //Entire game list
        $gameList = Games::find()->all();
        return $this->render('view',array(
            'game' => $game,
            'simGames' => $simGames,
            'gameList' => $gameList,
        ));
    }

    public function actionFilterByTag() {
        

        $simGames = array();
        echo $this->renderPartial('simList',array(
            'simGames' => $simGames,
        ));
    }
}

?>