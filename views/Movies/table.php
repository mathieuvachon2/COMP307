<table class='item-table'>
    <?php foreach ($movies as $movie) { ?>
        <tr>
            <td><img class='game-image' src='<?php echo $movie->image_url?>'/><td>
            <td><?php echo $movie->title.",".$movie->director->first_name." ".$movie->director->last_name."(".$movie->year.")"?><br>
            	<i class="italicDescription"><?php echo $movie->description ?></i>
            </td>
        </tr>
    <?php } ?>
</table>