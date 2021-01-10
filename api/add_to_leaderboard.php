<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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

$status = database_add_result($username, $duration, $attempts, $phrase, time(), $gamemode);

if ($status === ERROR_SQLITE3_NOT_INSTALLED) {
    $res = [
        "success" => false,
    ];

    die(json_encode($res));
}


$res = [
    "success" => true,
];

die(json_encode($res));
