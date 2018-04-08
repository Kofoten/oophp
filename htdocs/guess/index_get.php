<?php

namespace Rasb14\Guess;

include(__DIR__ . "/config.php");
include(__DIR__ . "/../../vendor/autoload.php");

$guess = new Guess();
$guess->random();
$status = "none";
if (isset($_GET)) {
    if (!isset($_GET["reset"])) {
        if (isset($_GET["secret"]) && isset($_GET["tries"])) {
            echo is_int($_GET["secret"]);
            $guess = new Guess($_GET["secret"], $_GET["tries"]);
        }

        if (isset($_GET["guess"]) && !empty($_GET["guess"])) {
            $status = $guess->makeGuess(intval($_GET["guess"]));
        }
    }

    if (isset($_GET["cheat"])) {
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
    <form method="GET">
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
