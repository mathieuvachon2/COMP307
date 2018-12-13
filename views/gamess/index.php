    <div class = "container-fluid">
        <div class = "row py-5">
            <div class="col">
                <h1 style="text-align: center">Video Games</h1>
            </div>
        </div>

        
        <div class = "row pt-5">
        <div class="col-sm-6">   
        <!-- Search by developer-->
        <div class = "row">
            <div class="col">
                <h2>Browse games depending on the developer</h2>
            </div>
        </div>

        <div class = "row">
            <div class="col">
                <div class="dropdown search-dev">
                    <input type='text' class='search-dev' placeholder='Search' onkeyup='filterdev()' onfocus='showdropdev()' onfocusout='hidedropdowndev()'></input>
                    <div class='dropdown-menu'>
                    <?php foreach($studios as $studio) { ?>
                        <div class='dropdown-item studio' onclick='select(this)' data-id='<?php echo $studio->id; ?>'><?php echo $studio->name; ?></div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Search by tags-->

        <!-- For desktop -->
        <div class = "row">
            <div class="col">
                <div class="dropdown search-genre">
                    <input type='text' class='search-genre' placeholder='Search' onkeyup='filtergenre()' onfocus='showdropgenre()' onfocusout='hidedropdowngenre()'></input>
                    <div class='dropdown-menu'>
                    <?php foreach($genreList as $genre) { ?>
                        <div class='dropdown-item genre' onclick='selectgenre(this)' data-id='<?php echo $genre->id; ?>'><?php echo $genre->name; ?></div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='filtered-list'>
    <?php echo Yii::$app->controller->renderPartial("table",array(
        'games' => $games, 
    )); ?>
    </div>