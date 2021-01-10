<?php

session_start();

include_once __DIR__ . "/../logic.php";
include_once __DIR__ . "/common.php";

common_init();
die_if_not_playing();

die_if_missing_parameters(array("letter"));

$letter = $_POST["letter"];

$res = [
    "success" => true,
    "guess_status" => guess_letter($letter),
    "tried_chars" => $_SESSION["tried_chars"],
    "hidden_phrase" => get_hidden_phrase(),
    "stage" => $_SESSION["stage"],
    "status" => $_SESSION["status"],
    "duration" => $_SESSION["duration"],
    "condemned_image" => get_condemned_image(),
    "remaining_attempts" => get_remaining_attempts()
];

die(json_encode($res));
