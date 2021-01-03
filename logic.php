<?php

session_start();

function generate_random_phrase() {
    $dizionario = include "dati.php";

    return $dizionario[array_rand($dizionario)];
}

function initialize_game($gamemode, $phrase) {
    if ($gamemode == "singleplayer") {
       $phrase = generate_random_phrase();
    }

    $_SESSION["gamemode"] = $gamemode;
    $_SESSION["phrase"] = $phrase;
    $_SESSION["stage"] = 0;
    $_SESSION["status"] = "playing";
    $_SESSION["tried_chars"] = array();
}

function is_playing() {
    return isset($_SESSION["status"]) && $_SESSION["status"] === "playing";
}

function get_hidden_phrase() {
    $actualPhrase = $_SESSION["phrase"];
    $triedChars = $_SESSION["tried_chars"];
    $hiddenPhrase = "";

    foreach (str_split($actualPhrase) as $char) {

        // Spaces must not be converted
        if ($char === " ") {
            $hiddenPhrase .= " ";
        
        } else {
            // If the char has been tried by the user and
            // exist in the phrase, append it to the hidden phrase string.
            if (
                in_array(strtolower($char), $triedChars) &&
                in_array(strtolower($char), str_split($actualPhrase))
            ) {
                $hiddenPhrase .= $char;
            } else {
                $hiddenPhrase .= "_";
            }
        }
    }

    return $hiddenPhrase;
}

function guess_phrase($phrase) {
    // Convert both strings to lowercase
    $userPhrase = strtolower($phrase);
    $correntPhrase = strtolower($_SESSION["phrase"]);

    $isGuessRight = $userPhrase === $correntPhrase;

    // User has won, set session status accordingly.
    if ($isGuessRight) {
        $_SESSION["status"] = "won";
    }

    return $isGuessRight;
}
