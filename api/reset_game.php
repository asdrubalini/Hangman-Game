<?php

session_start();

include_once __DIR__ . "/../logic.php";
include_once __DIR__ . "/common.php";

common_init();
die_if_not_playing();

session_unset();

$res = [
    "success" => true,
];

die(json_encode($res));
