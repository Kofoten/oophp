<?php

include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload.php");

$guess = new Guess();
$guess->random();
$status = "none";
if (isset($_POST)) {
    if (!isset($_POST["reset"])) {
        if (isset($_POST["secret"]) && isset($_POST["tries"])) {
            echo is_int($_POST["secret"]);
            $guess = new Guess($_POST["secret"], $_POST["tries"]);
        }

        if (isset($_POST["guess"]) && !empty($_POST["guess"])) {
            $status = $guess->makeGuess(intval($_POST["guess"]));
        }
    }

    if (isset($_POST["cheat"])) {
        $status .= " Nummer: " . $guess->number();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Guessing Game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?= $status ?>
    <form method="POST">
        <input type="hidden" name="secret" value="<?= $guess->number() ?>"/>
        <input type="hidden" name="tries" value="<?= $guess->tries() ?>"/>
        <label for="guess">Guess</label>
        <input type="text" name="guess"/>
        <input type="submit" value="Make Guess"/>
        <input type="submit" name="cheat" value="Cheat"/>
        <input type="submit" name="reset" value="Reset"/>
    </form>   
</body>
</html>