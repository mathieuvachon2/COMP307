<?php $count = 1; ?>
<?php foreach ($simGames as $similar) { ?>
<div class='suggestion item'>
    <div class='item-head'>
        <div class='title'>
            <h1><?php echo $similar->title?></h1>
            <h2>(<?php echo $similar->year ?>)</h2>
        </div>
    </div>
    <div class='image'>
        <img src='https://upload.wikimedia.org/wikipedia/en/d/d5/Diablo_II_Coverart.png'/>
    </div>
    <div class='description'>
        <p><?php echo $similar->description ?></p>
    </div>
    <div class='right-bar'>
        <div class='tag'>RPG</div>
        <div class='tag'>Action</div>
        <div class='tag'>Multiplayer</div>
        <div class="sim-rank <?php echo ($count==1 ? "first" : ($count==2 ? "second" : ($count==3 ? "third" : "")))?>"><div class='nb'><?php echo $count?></div></div>
    </div>
</div>
<?php $count++; ?>
<?php } ?>