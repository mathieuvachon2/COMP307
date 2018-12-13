<div class='content'>
    <div class='tag-bar desktop'>
        <?php foreach ($tagList as $tag) { ?>
            <div class='tag' data-id=<?php echo $tag->id ?>><?php echo $tag->name ?></div>
        <?php } ?>
    </div>
    <div class='tag-bar mobile'>
        <select multiple class='tag-select' name='tags' onchange='selecttag()'>
        <?php foreach ($tagList as $tag) { ?>
            <option value='<?php echo $tag->id ?>'><?php echo $tag->name ?></div>
        <?php } ?>
        </select>
    </div>
    <div class='similar-content'>
        <div class='main item' data-id=<?php echo $movie->id?>>
            <div class='item-head'>
                <div class='title'>
                    <h1><?php echo $movie->title?></h1>
                    <h2><?php echo $movie->director->first_name." ".$movie->director->last_name." (".$movie->year.")"?></h2>
                </div>
            </div>
            <div class='image'>
                <img src='<?php echo $movie->image_url ?>'/>
                <div class='right-bar mobile'>
                    <?php foreach ($movie->tags as $gTag) { ?>
                    <div class='tag'><?php echo $gTag->genre->name ?></div>
                    <?php } ?>
                </div>
            </div>
            <div class='description'>
                <p><?php echo $movie->description ?></p>
            </div>
            <div class='right-bar desktop'>
                <?php foreach ($movie->tags as $gTag) { ?>
                <div class='tag'><?php echo $gTag->genre->name ?></div>
                <?php } ?>
            </div>
        </div>
        <div class='sim-list'>
            <?php echo Yii::$app->controller->renderPartial('simList',array(
                'simMovies' => $simMovies,
            )); ?>
        </div>
    </div>
    <div class='similar-form'>
        <div class='title'>
            Suggest Similarity
        </div>
        <input type='hidden' name='curmovie' value='<?php echo $movie->id ?>'></input>
        <div class="form-group">
            <select multiple class='form-control' name="movie">
                <?php foreach ($movieList as $option) { ?>
                    <option value='<?php echo $option->id ?>'><?php echo $option->title ?></option>
                <?php } ?>
            </select>
        </div> 
        <div class='button-row'>
            <div class='fake-button' onclick='submitSimilar()'>Suggest</div>
        </div>
    </div>
</div>