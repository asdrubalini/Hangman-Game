<?php

include_once "../logic.php";
include_once "common.php";

common_init();

die_if_missing_parameters(array("phrase"));

$phrase = $_POST["phrase"];

$data = [
    "success" => true,
    "guess_status" => guess_phrase($phrase)
];

die(json_encode($data));
