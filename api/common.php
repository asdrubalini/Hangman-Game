<?php

session_start();

include_once __DIR__ . "/../logic.php";

function assert_post_request() {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        die();
    }
}

function set_json_reponse() {
    header("Content-Type: application/json");
}

function die_with_error($error) {
    $data = [
        "success" => false,
        "error" => $error
    ];

    die(json_encode($data));
}

function die_if_not_playing() {
    // Raise an error if the user is not playing
    if (!is_playing()) {
        die_with_error("The user is not playing");
    }
}

function die_if_missing_parameters($parameters) {
    foreach ($parameters as $parameter) {
        if (!isset($_POST[$parameter])) {
            die_with_error("Missing required parameter: " . $parameter);
        }
    }
}

// All the initial stuff like checking request method,
// setting JSON Content-Type and other stuff
function common_init() {
    assert_post_request();
    set_json_reponse();
}
