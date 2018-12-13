<?php $count = 1; ?>
<?php foreach ($simGames as $similar) { ?>
<div class='suggestion item'>
    <div class='item-head'>
        <div class='title'>
            <h1><?php echo $similar->title ?></h1>
            <h2><?php echo $similar->studio->name." (".$similar->year.")" ?></h2>
        </div>
    </div>
    <div class='image'>
        <a href='/index.php/games/view/<?php echo $similar->id?>'><img src='<?php echo $similar->image_url ?>'/></a>
        <div class='right-bar mobile'>
        <?php foreach ($similar->tags as $gTag) { ?>
        <div class='tag'><?php echo $gTag->genre->name ?></div>
        <?php } ?>
        <div class="sim-rank <?php echo ($count==1 ? "first" : ($count==2 ? "second" : ($count==3 ? "third" : "")))?>"><div class='nb'><?php echo $count?></div></div>
    </div>
    </div>
    <div class='description'>
        <p><?php echo $similar->description ?></p>
    </div>
    <div class='right-bar desktop'>
        <?php foreach ($similar->tags as $gTag) { ?>
        <div class='tag'><?php echo $gTag->genre->name ?></div>
        <?php } ?>
        <div class="sim-rank <?php echo ($count==1 ? "first" : ($count==2 ? "second" : ($count==3 ? "third" : "")))?>"><div class='nb'><?php echo $count?></div></div>
    </div>
</div>
<?php $count++; ?>
<?php } ?>