<?php

namespace app\models\games;

use yii\db\ActiveRecord;

class GamesGenres extends ActiveRecord
{
    public function getGenre() {
        return $this->hasOne(get_class(new GameGenres),array('id'=>'game_genres_id'));
    }
}