<?php

namespace app\models\movies;

use yii\db\ActiveRecord;

class MoviesGenres extends ActiveRecord
{
    public function getGenre() {
        return $this->hasOne(get_class(new MovieGenres),array('id'=>'movie_genres_id'));
    }
}