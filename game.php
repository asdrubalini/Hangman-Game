<?php

session_start();
include_once __DIR__ . "/logic.php";

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

    // Validate gamemode
    if ($gamemode !== "singleplayer" && $gamemode !== "multiplayer") {
        die("Unexpected error: wrong game type");
    }

    if ($gamemode === "multiplayer" && !isset($phrase)) {
        die("Unexpected error: missing phrase");
    }

    // No need to reinizialize the game if the user is alredy playing
    if (!is_playing()) {
        initialize_game($gamemode, $phrase);

        /**
         * After initializing the game, re-redirect to this page
         * but with a GET request, so that parameters are erased and
         * won't be passed to the page after every reload.
         */
        header("Location: game.php");
    }

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
        <?php include_once __DIR__ . "/partials/head.php" ?>
    </head>

    <body>

        <?php include_once __DIR__ . "/partials/header.php" ?>

        <div class="container">
            <?php include_once __DIR__ . "/partials/word-guess.php" ?>
        </div>

        <?php include_once __DIR__ . "/partials/javascript.php" ?>
        <script src="js/game.js"></script>

    </body>

</html>
