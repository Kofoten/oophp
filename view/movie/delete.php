<?php

namespace Anax\View;

?>
<form method="post">
    <fieldset>
        <legend>Edit</legend>
        <input type="hidden" name="movieId" value="<?= $movie->id ?>"/>
        <p>
            <label>Title:<br> 
                <input type="text" value="<?= $movie->title ?>" disabled/>
            </label>
        </p>
        <p>
            <label>Year:<br> 
            <input type="number" value="<?= $movie->year ?>" disabled/>
        </p>
        <p>
            <label>Image:<br> 
                <input type="text" value="<?= $movie->image ?>" disabled/>
            </label>
        </p>
        <p>
            <input type="submit" name="doDelete" value="Delete">
        </p>
    </fieldset>
</form>
