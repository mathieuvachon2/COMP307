<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

use app\models\Games\Games;
use app\models\Movies\Movies;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="UTF-8">
    <?php $this->head() ?>
    <?= Html::csrfMetaTags() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/popup.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/popup.js"></script>
    <script src="/js/common.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    

</head>
<body>
<?php $this->beginBody() ?>
<?php   $query = Games::find();
        $games = $query -> orderBy('id') -> all();

        $query = Movies::find();
        $movies = $query -> orderBy('id') -> all();?>
    <div class='header-desktop'>
        <nav class="navbar navbar-expand-sm justify-content-end">
            <a href='/'><img src='/images/logo.png'/></a>
            <div class="dropdown search">
                <input type='text' class='search-filter' placeholder='Search' onfocus='showdropdown()' onkeyup='filter("desktop")' onblur='hidedropdown()'></input>
                <div class='dropdown-menu'>
                <?php foreach($games as $game) { ?>
                    <a class='dropdown-item game' href='/games/view/<?php echo $game->id; ?>'><?php echo $game->title; ?></a>
                <?php } ?>
                    <div class="dropdown-divider"></div>
                <?php foreach ($movies as $mov) { ?>
                    <a class='dropdown-item mov' href='/movies/view/<?php echo $mov->id; ?>'><?php echo $mov->title; ?></a>                    
                <?php } ?>
                </div>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?php echo Url::to('/index.php/games/index')?>">Video Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?php echo Url::to('/index.php/movies/index')?>">Movies</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class='header-mobile'>
        <nav class="navbar navbar-expand-sm">
            <a href='/'><img src='/images/logo.png'/></a>
            <div class="dropdown search">
                <input type='text' class='search-filter' placeholder='Search' onfocus='showdropdown()' onkeyup='filter("mobile")' onblur='hidedropdown()'></input>
                <div class='dropdown-menu'>
                <?php foreach($games as $game) { ?>
                    <a class='dropdown-item game' href='/games/view/<?php echo $game->id; ?>'><?php echo $game->title; ?></a>
                <?php } ?>
                    <div class="dropdown-divider"></div>
                <?php foreach ($movies as $mov) { ?>
                    <a class='dropdown-item mov' href='/movies/view/<?php echo $mov->id; ?>'><?php echo $mov->title; ?></a>                    
                <?php } ?>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/index.php/games/index">Video Games</a>
                    <a class="dropdown-item" href="/index.php/movies/index">Movies</a>
                </div>
            </div>
        </nav>
    </div>
    <?php echo $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
