<?php

include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload.php");

session_name("rasb14_guess");
session_start();

$guess = new Guess();
$guess->random();
$status = "none";
if (isset($_POST)) {
    if (!isset($_POST["reset"]) && isset($_SESSION)) {
        if (isset($_SESSION["guess"])) {
            $guess = $_SESSION["guess"];
        }

        if (isset($_POST["guess"]) && !empty($_POST["guess"])) {
            $status = $guess->makeGuess(intval($_POST["guess"]));
        }
    }

    if (isset($_POST["cheat"])) {
        $status .= " Nummer: " . $guess->number();
    }
}

$_SESSION["guess"] = $guess;
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
        <label for="guess">Guess</label>
        <input type="text" name="guess"/>
        <input type="submit" value="Make Guess"/>
        <input type="submit" name="cheat" value="Cheat"/>
        <input type="submit" name="reset" value="Reset"/>
    </form>   
</body>
</html>