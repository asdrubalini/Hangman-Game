<?php

session_start();

include_once __DIR__ . "/../logic.php";
include_once __DIR__ . "/common.php";

common_init();
die_if_not_playing();

die_if_missing_parameters(array("phrase"));

$phrase = $_POST["phrase"];

$res = [
    "success" => true,
    "guess_status" => guess_phrase($phrase),
    "hidden_phrase" => get_hidden_phrase(),
    "duration" => $_SESSION["duration"],
    "errors" => $_SESSION["stage"],
    "condemned_image" => get_condemned_image(),
    "status" => $_SESSION["status"],
    "stage" => $_SESSION["stage"]
];

die(json_encode($res));
