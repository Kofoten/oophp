<?php
/**
 * Guess game routes.
 */
//var_dump(array_keys(get_defined_vars()));



/**
 * Guess my number with GET
 */
$app->router->get("guess/get", function () use ($app) {
    $guess = new \Rasb14\Guess\Guess();
    $guess->random();
    $status = "none";
    if (isset($_GET)) {
        if (!isset($_GET["reset"])) {
            if (isset($_GET["secret"]) && isset($_GET["tries"])) {
                echo is_int($_GET["secret"]);
                $guess = new \Rasb14\Guess\Guess($_GET["secret"], $_GET["tries"]);
            }

            if (isset($_GET["guess"]) && !empty($_GET["guess"])) {
                $status = $guess->makeGuess(intval($_GET["guess"]));
            }
        }

        if (isset($_GET["cheat"])) {
            $status .= " Nummer: " . $guess->number();
        }
    }

    $data = [
        "title" => "Guess number GET",
        "status" => $status,
        "guess" => $guess
    ];

    $app->view->add("guess/get", $data);
    $app->page->render($data);
});



/**
* Guess my number with SESSION
 */
$app->router->get("guess/session", function () use ($app) {
    session_name("rasb14_guess");
    session_start();
    
    $guess = new \Rasb14\Guess\Guess();
    $guess->random();
    $status = "none";
    if (isset($_POST)) {
        if (!isset($_POST["reset"]) && isset($_SESSION)) {
            if (isset($_SESSION["number"]) && isset($_SESSION["tries"])) {
                $guess = new \Rasb14\Guess\Guess($_SESSION["number"], $_SESSION["tries"]);
            }
    
            if (isset($_POST["guess"]) && !empty($_POST["guess"])) {
                $status = $guess->makeGuess(intval($_POST["guess"]));
            }
        }
    
        if (isset($_POST["cheat"])) {
            $status .= " Nummer: " . $guess->number();
        }
    }
    
    $_SESSION["number"] = $guess->number();
    $_SESSION["tries"] = $guess->tries();
    
    $data = [
        "title" => "Guess number SESSION",
        "status" => $status,
        "guess" => $guess
    ];

    $app->view->add("guess/session", $data);
    $app->page->render($data);
});

$app->router->post("guess/session", function () use ($app) {
    session_name("rasb14_guess");
    session_start();
    
    $guess = new \Rasb14\Guess\Guess();
    $guess->random();
    $status = "none";
    if (isset($_POST)) {
        if (!isset($_POST["reset"]) && isset($_SESSION)) {
            if (isset($_SESSION["number"]) && isset($_SESSION["tries"])) {
                $guess = new \Rasb14\Guess\Guess($_SESSION["number"], $_SESSION["tries"]);
            }
    
            if (isset($_POST["guess"]) && !empty($_POST["guess"])) {
                $status = $guess->makeGuess(intval($_POST["guess"]));
            }
        }
    
        if (isset($_POST["cheat"])) {
            $status .= " Nummer: " . $guess->number();
        }
    }
    
    $_SESSION["number"] = $guess->number();
    $_SESSION["tries"] = $guess->tries();
    
    $data = [
        "title" => "Guess number SESSION",
        "status" => $status,
        "guess" => $guess
    ];

    $app->view->add("guess/session", $data);
    $app->page->render($data);
});
