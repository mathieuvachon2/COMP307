<table class='item-table'>
    <?php foreach ($games as $game) { ?>
        <tr onclick='window.location.replace("/index.php/games/view/<?php echo $game->id ?>")'>
            <td><img class='game-image' src='<?php echo $game->image_url?>'/><td>
            <td class='info'><?php echo $game->title." (".$game->year.")"?><br>
            	<i class="italicDescription"><?php echo $game->description ?></i>
            </td>
        </tr>
    <?php } ?>
</table>