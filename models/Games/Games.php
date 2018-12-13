<?php

namespace app\models\games;

use yii\db\ActiveRecord;
use app\models\Games\Studios;


class Games extends ActiveRecord
{
    public function getStudio() {
        return $this->hasOne(get_class(new Studios),array('id' => 'studio_id'));
    }
    public function getTags() {
        return $this->hasMany(get_class(new GamesGenres),array('games_id'=> 'id'));
    }
}