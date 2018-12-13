<?php
namespace app\components;

use app\models\movies\Movies;
use app\models\movies\MovieGenres;
use app\models\movies\MoviesMovies;
use app\models\movies\MoviesGenres;

class MoviesHelpers
{
    //function that finds the ActiveRecord of a movie given an id
    public function findMovieByID($id){
    	//The specific movie we're looking at
        $query = Movies::find();
        $movie = $query -> where([
            'id' => $id,
        ])->one();

        return $movie;
    }

    //function that finds all similar movies, and returns an array of their Active records to which are also appended tags
    public function findSimilarMovies($id){
        //Get the list of all tags
        $query = MovieGenres::find();
        $tagList = $query -> orderBy('id') -> with(array('tags','director'))->all();

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
            $similarMovie = findMovieByID($movieId);                     //find ActiveRecord of similar movie
            array_push($simMovies,$similarMovie);
        }

        return $simMovies;
    }
}