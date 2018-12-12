<div class='content'>
    <div class='tag-bar'>
        <div class='tag' data-id=1>RPG</div>
        <div class='tag' data-id=2>RTS</div>
        <div class='tag' data-id=3>Action</div>
        <div class='tag' data-id=4>Horror</div>
        <div class='tag' data-id=5>Indie</div>
        <div class='tag' data-id=6>Adventure</div>
        <div class='tag' data-id=7>Casual</div>
        <div class='tag' data-id=8>Singleplayer</div>
        <div class='tag' data-id=9>Multiplayer</div>
    </div>
    <div class='similar-content'>
        <div class='main item' data-id=<?php echo $game->id?>>
            <div class='item-head'>
                <div class='title'>
                    <h1><?php echo $game->title?></h1>
                    <h2>(<?php echo $game->year?>)</h2>
                </div>
            </div>
            <div class='image'>
                <img src='https://upload.wikimedia.org/wikipedia/en/d/d5/Diablo_II_Coverart.png'/>
            </div>
            <div class='description'>
                <p><?php echo $game->description ?></p>
            </div>
            <div class='right-bar'>
                <div class='tag'>RPG</div>
                <div class='tag'>Action</div>
                <div class='tag'>Multiplayer</div>
            </div>
        </div>
        <div class='sim-list'>
            <?php echo Yii::$app->controller->renderPartial('simList',array(
                'simGames' => $simGames,
            )); ?>
        </div>
    </div>
    <div class='similar-form'>
        <div class='title'>
            Suggest Similarity
        </div>
        <input type='hidden' name='curgame' value='10'></input>
        <div class="form-group">
            <select multiple class='form-control' name="game">
                <?php foreach ($gameList as $option) { ?>
                    <option value='<?php echo $option->id ?>'><?php echo $option->title ?></option>
                <?php } ?>
            </select>
        </div> 
        <div class='button-row'>
            <div class='fake-button' onclick='submitSimilar()'>Suggest</div>
        </div>
    </div>
</div>