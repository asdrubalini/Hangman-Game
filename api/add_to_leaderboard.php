<?php

include_once __DIR__ . "/../logic.php";
include_once __DIR__ . "/common.php";
include_once __DIR__ . "/../database.php";

common_init();

die_if_missing_parameters(array("username"));

$username = $_POST["username"];
$duration = $_SESSION["duration"];
$attempts = $_SESSION["stage"];
$phrase = $_SESSION["phrase"];
$gamemode = $_SESSION["gamemode"];

database_add_result($username, $duration, $attempts, $phrase, time(), $gamemode);

$res = [
    "success" => "true",
];

die(json_encode($res));
