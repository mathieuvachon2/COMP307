<?php 
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Movies\Movies;
use app\models\Movies\MoviesGenres;
use app\models\Movies\MoviesMovies;
use app\models\Movies\MovieGenres;
use app\models\Movies\People;

use app\components\MoviesHelpers;    //Need one for movies


class MoviesController extends Controller {

   

    public function actionIndex() {
        Yii::$app->view->registerCssFile('/css/gamesIndex.css');
        Yii::$app->view->registerJsFile('/js/index3.js');

        $query = Movies::find();
        $movies = $query -> orderBy('id') -> all();      //array of ActiveRecords for movies
        

        //Get the genres as a list ordered by their ids
        $query = MovieGenres::find();
        $genreList = $query -> orderBy('id') -> all();     //list of movie genres ordered by id

        $directors = People::find()->orderBy('id')->all();
        
        return $this->render('index',[
            'movies' => $movies,
            'genreList' => $genreList,
            'directors' => $directors,
        ]);
    }

    
    public function actionView($id) {
        Yii::$app->view->registerCssFile('/css/similar.css');         //*******CHANGE THIS IF NEEDED********
        Yii::$app->view->registerJsFile('/js/movieView.js');

        //The specific movie we're looking at
        $query = Movies::find();
        $movie = $query -> where([
            'id' => $id,
        ])->one();

        //Get the list of all tags
        $query = MovieGenres::find();
        $tagList = $query -> orderBy('id') -> all();

        //Get similar movies to this movie, and order them by descending count.
        $query = MoviesMovies::find();
        $simMoviesID = $query->where([
            'movies_id_1' => $id,
            ])->orWhere([
            'movies_id_2' => $id,
        ]) -> orderBy([
            'count' => SORT_DESC,
        ]) -> all();

        $simMovies = array();
        foreach ($simMoviesID as $simMovie) {
            $movieId = ($simMovie->movies_id_1 == $id ? $simMovie->movies_id_2 : $simMovie->movies_id_1);    //id of similar movie
            $similarMovie = MoviesHelpers::findMovieByID($movieId);                     //find ActiveRecord of similar movie
            array_push($simMovies,$similarMovie);
        }
        //Only send back the top 10 similar movies
        $simMovies = array_slice($simMovies,0,9,true);
        
        $query = Movies::find();
        $movieList = $query 
            -> select([
                'id',
                'title',
            ]) 
            -> orderBy('id')
            -> where('id != '.$id)
            -> with(array('director','tags'))
            -> all();


        return $this->render('view',array(  //CHANGE VIEW HERE IF NEED BE
            'movie' => $movie,            //The current movie (need full model/activerecord) + tags
            'simMovies' => $simMovies,    //Similar movies (ordered) (need full model/activerecord) + tags
            'movieList' => $movieList,    //Entire movie list (only need ID + Title)
            'tagList' => $tagList,      //Entire tag list (id + name),
        ));
    }

    public function actionFilterbytag() {
        // use $_POST to get post data
        $simMovies = array();

        $req = Yii::$app->request;

        //var_dump($simMovies);
        $mainId = $req->post('main_id');
        $tagIds = $req->post('tag_ids');
        //var_dump($tagIds);

        $query = MoviesMovies::find();
         $simMoviesID = $query->where([
            'movies_id_1' => $mainId,
            ])->orWhere([
            'movies_id_2' => $mainId,
        ]) -> orderBy([
            'count' => SORT_DESC,
        ]) -> all();

        //Get the list of all tags
        $query = MovieGenres::find();
        $tagList = $query -> orderBy('id') -> all();

        $simMovies = array();
        foreach ($simMoviesID as $simMovie) {
            $movieId = ($simMovie->movies_id_1 == $mainId ? $simMovie->movies_id_2 : $simMovie->movies_id_1);    //id of similar movie
            $similarMovie = MoviesHelpers::findMovieByID($movieId);                     //find ActiveRecord of similar movie
            array_push($simMovies,$similarMovie);
        }

        foreach ($simMovies as $key=>$similarMovie) {

            if (isset($tagIds) && !empty($tagIds)) {
                $movieGenreIds = array();
                foreach ($similarMovie->tags as $tag) {
                    array_push($movieGenreIds,$tag->movie_genres_id);
                }
                foreach ($tagIds as $tag) {
                    if (!in_array($tag,$movieGenreIds)) {
                        unset($simMovies[$key]);
                        break;
                    }
                }
            }
        }

        //Only send back the top 10 similar movies
        $simMovies = array_slice($simMovies,0,9,true);
        
        return $this->renderPartial('simList',array(            //**********CHANGE simList to movie version******************
            'simMovies' => $simMovies,    //Similar movies (ordered) (need full model/activerecord) + tags
        ));
    }

    public function actionSuggest() {
        $req = Yii::$app->request;

        //var_dump('hella');
        //$request = json_decode($req->post());

        $mainId = $req->post('mainid');
        $simIds = $req->post('simids');

        //var_dump($mainId);

        $query = MoviesMovies::find();
        $simRecord = array('1');

        foreach ($simIds as $similarSuggestion) {
            $simRecord = $query 
            -> where([
                'movies_id_1'=>$similarSuggestion,
                'movies_id_2'=>$mainId,
            ])
            -> orWhere([
                'movies_id_1'=>$mainId,
                'movies_id_2'=>$similarSuggestion,
            ])
            ->all();

            if(empty($simRecord)){      //then we must add a new record
                $newSuggestion = new MoviesMovies();
                $newSuggestion->movies_id_1 = $mainId;
                $newSuggestion->movies_id_2 = $similarSuggestion;
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

        if (isset($_POST['director_id'])) {
            $director_id = $_POST['director_id'];
        } else {
            $studio = null;
        }
        if (isset($_POST['genre_ids'])) {
            $tag_ids = $_POST['genre_ids'];
        } else {
            $tag_ids = null;
        }
        $movies = Movies::find();
        if (!empty($director_id)) {
            $movies->where(array('director_id' => $director_id));
        }

        $movies = $movies->with(array('director','tags'))->all();
        foreach ($movies as $key=>$movie) {

            if (isset($tag_ids) && !empty($tag_ids)) {
                $movieGenreIds = array();
                foreach ($movie->tags as $tag) {
                    array_push($movieGenreIds,$tag->movie_genres_id);
                }
                foreach ($tag_ids as $tag) {
                    if (!in_array($tag,$movieGenreIds)) {
                        unset($movies[$key]);
                        break;
                    }
                }
            }
        }
        return $this->renderPartial('table',array(
            'movies' => $movies,
        ));
    }
}

?>
