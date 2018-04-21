<?php

namespace Anax\View;

?>
<h1><?= $title ?></h1>
<form method="POST">
    <label for="player">Name</label>
    <input type="text" name="player"/>
    <label for="dices">Dices</label>
    <input type="number" name="dices"/>
    <input type="submit" value="Start Game"/>
</form>
