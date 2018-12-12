<?php

namespace app\models\movies;

use yii\db\ActiveRecord;

class Movies extends ActiveRecord
{
    public $tags = array();
}