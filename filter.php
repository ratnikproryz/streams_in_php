<?php
$source = fopen('file://' . __DIR__ . '/text//email.txt', 'r');
$dest = fopen('file://' . __DIR__ . '/text/toupper-email.txt', 'w');
stream_filter_append($source, 'string.toupper');
while(1){
    $email= fgets($source);
    if($email){
        fputs($dest, $email);
    }
    else{
        break;
    }
}
fclose($source);
fclose($dest);