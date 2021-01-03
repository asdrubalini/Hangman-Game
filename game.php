<?php

session_start();

/** 
 * Parameters are initialized only on POST requests.
 */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    /**
     * Check POST parameters and create a session for the user.
     * This way we don't have to store the phrase on the client,
     * making cheating impossible.
     */

    $gamemode = $_POST["gamemode"];
    $phrase = $_POST["phrase"];

    if ($gamemode !== "singleplayer" && $gamemode !== "multiplayer") {
        die("Error: wrong game type");
    }

    if ($gamemode === "multiplayer" && !isset($phrase)) {
        die("Error: missing phrase");
    }

    $_SESSION["gamemode"] = $gamemode;
    $_SESSION["phrase"] = $phrase;
    $_SESSION["stage"] = 0;
    $_SESSION["status"] = "playing";
    $_SESSION["tried_words"] = array("A", "X");

} else if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $status = $_SESSION["status"];

    // Redirect the user if a game has not been started
    if (!isset($status) || $status !== "playing") {
        header("Location: index.php");
    }
}

?>

<html>

    <head>
        <?php include("partials/head.php") ?>
    </head>

    <body>

        <div class="container welcome">

            <div class="row">
                <p class="welcome__title">Impiccato</p>
            </div>
            
            <?php include("partials/word-guess.php") ?>
        
        </div>

        <?php include("partials/javascript.php") ?>
        <script src="js/game.js"></script>

    </body>

</html>
