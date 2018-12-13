<table class='item-table'>
    <?php foreach ($games as $game) { ?>
        <tr>
            <td><img class='game-image' src='<?php echo $game->image_url?>'/><td>
            <td><?php echo $game->title." (".$game->year.")"?></td>
        </tr>
    <?php } ?>
</table>