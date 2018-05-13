<?php

namespace Anax\View;

?>
<form method="post">
    <fieldset>
        <legend>Add</legend>
        <p>
            <label>Title:<br> 
                <input type="text" name="contentTitle"/>
            </label>
        </p>
        <p>
            <button type="submit" name="doSave"><i class="far fa-save" aria-hidden="true"></i> Save</button>
            <button type="reset"><i class="fa fa-undo" aria-hidden="true"></i> Reset</button>
        </p>
    </fieldset>
</form>
