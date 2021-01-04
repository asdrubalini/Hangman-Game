<?php

include_once __DIR__ . "/../logic.php";
include_once __DIR__ . "/common.php";

common_init();

die_if_missing_parameters(array("username"));

$username = $_POST["username"];

$leaderboardFile = fopen("../storage/leaderboard.txt", "a") or die("Cannot open leaderboard file");

$data = [
    "username" => $username,
    "stage" => $_SESSION["stage"],
    "duration" => $_SESSION["duration"]
];

fwrite($leaderboardFile, json_encode($data) . "\n");
fclose($leaderboardFile);

$res = [
    "success" => "true",
];

die(json_encode($res));
