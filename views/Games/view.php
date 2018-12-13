<div class='content'>
    <div class='tag-bar'>
        <?php foreach ($tagList as $tag) { ?>
            <div class='tag' data-id=<?php echo $tag->id ?>><?php echo $tag->name ?></div>
        <?php } ?>
    </div>
    <div class='similar-content'>
        <div class='main item' data-id=<?php echo $game->id?>>
            <div class='item-head'>
                <div class='title'>
                    <h1><?php echo $game->title?></h1>
                    <h2><?php echo $game->studio->name." (".$game->year.")"?></h2>
                </div>
            </div>
            <div class='image'>
                <img src='<?php echo $game->image_url ?>'/>
            </div>
            <div class='description'>
                <p><?php echo $game->description ?></p>
            </div>
            <div class='right-bar'>
                <?php foreach ($game->tags as $gTag) { ?>
                <div class='tag'><?php echo $gTag->genre->name ?></div>
                <?php } ?>
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
        <input type='hidden' name='curgame' value='<?php echo $game->id ?>'></input>
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