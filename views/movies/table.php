<table class='item-table'>
    <?php foreach ($movies as $movie) { ?>
        <tr onclick='window.location.replace("/index.php/movies/view/<?php echo $movie->id ?>")'>
            <td><img class='game-image' src='<?php echo $movie->image_url?>'/><td>
            <td class='info'><?php echo $movie->title.",".$movie->director->first_name." ".$movie->director->last_name."(".$movie->year.")"?><br>
            	<i class="italicDescription"><?php echo $movie->description ?></i>
            </td>
        </tr>
    <?php } ?>
</table>