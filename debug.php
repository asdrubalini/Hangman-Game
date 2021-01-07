<?php

function debug_log($text) {
    file_put_contents('/var/www/html/logs.txt', $text . "\n", FILE_APPEND);
}
