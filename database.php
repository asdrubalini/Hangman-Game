<?php

$DATABASE_PATH = __DIR__ . "/storage/database.db";

function database_add_result($username, $duration, $attempts, $phrase, $date, $gamemode) {
    /**
     * Add a new result to database.
     * Data is passed as parameters
     */
    
    $db = new SQLite3(__DIR__ . "/storage/database.db");

    $stmt = $db->prepare("INSERT INTO results (username, duration, attempts, phrase, date, gamemode) VALUES(:username, :duration, :attempts, :phrase, :date, :gamemode);");

    $stmt->bindValue(":username", $username, SQLITE3_TEXT);
    $stmt->bindValue(":duration", $duration, SQLITE3_NUM);
    $stmt->bindValue(":attempts", $attempts, SQLITE3_INTEGER);
    $stmt->bindValue(":phrase", $phrase, SQLITE3_TEXT);
    $stmt->bindValue(":date", $date, SQLITE3_INTEGER);
    $stmt->bindValue(":gamemode", $gamemode, SQLITE3_TEXT);

    $stmt->execute();
}

function database_fetch_results($sort) {
    /**
     * Fetch results from database ordered by $sort
     */

    $db = new SQLite3(__DIR__ . "/storage/database.db");

    /**
     * Validate sort by and make it safe preventing SQL injections
     * and other bad stuff like that. Unfortunately,
     * it is not possible to use bindValue over order by
     * so this is the only possible way without using ifs
     */
    $validSorts = array("duration", "attempts", "date");
    
    if (!in_array($sort, $validSorts)) {
        die("database_fetch_results(): invalid sort");
    }

    // Date order must be the other way around in order to make sense
    if ($sort === "date") {
        $order = "DESC";
    } else {
        $order = "ASC";
    }

    $stmt = $db->prepare("SELECT * FROM results ORDER BY $sort $order LIMIT 100;");
    $result = $stmt->execute();

    $data = array();
    $dataIdx = 0;

    while ($res = $result->fetchArray(SQLITE3_ASSOC)) {
        $data[$dataIdx] = $res;
        $dataIdx++;
    }

    return $data;
}
