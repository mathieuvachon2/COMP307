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

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="UTF-8">
    <?php $this->head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/popup.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/popup.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    

</head>
<body>
<?php $this->beginBody() ?>

<div class='header-desktop'>
        <nav class="navbar navbar-expand-sm justify-content-end">
            <a class="navbar-brand" href='/'><img src='/images/logo.png'/></a>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search...">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?php echo Url::to('/games/index')?>">Video Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?php echo Url::to('/movies/index')?>">Movies</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class='header-mobile'>
        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href='index.html'><img src='/images/logo.png'/></a>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search...">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="similar.html">Video Games</a>
                    <a class="dropdown-item" href="similar.html">Movies</a>
                </div>
            </div>
        </nav>
    </div>
    <?php echo $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
