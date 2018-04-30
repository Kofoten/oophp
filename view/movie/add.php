<?php

namespace Anax\View;

?>
<form method="post">
    <fieldset>
        <legend>Edit</legend>
        <p>
            <label>Title:<br> 
                <input type="text" name="movieTitle" value=""/>
            </label>
        </p>
        <p>
            <label>Year:<br> 
            <input type="number" name="movieYear" value=""/>
        </p>
        <p>
            <label>Image:<br> 
                <input type="text" name="movieImage" value=""/>
            </label>
        </p>
        <p>
            <input type="submit" name="doAdd" value="Add">
        </p>
    </fieldset>
</form>
