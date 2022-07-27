<?php
require_once __DIR__."/convert_filter.php";
$source = fopen('file://' . __DIR__ . '/text/email.txt', 'r');
$dest = fopen('file://' . __DIR__ . '/text/convert-email.txt', 'w');
stream_filter_register("convert", "convert_filter");
stream_filter_append($source, "convert");
while (1) {
    $index = ftell($source);
    $email = fgets($source);
    if ($email) {
        fputs($dest, $email);
    } else {
        break;
    }
}
echo fgets($source);
fclose($source);
