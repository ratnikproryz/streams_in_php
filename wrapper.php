<?php

$wrappers = stream_get_wrappers();
foreach ($wrappers as $wrapper) {
    echo $wrapper . "<br>";
}

$temp = fopen('php://temp', 'rw');
for ($i = 0; $i < 10; $i++) {
    $string = $i . " green bottles sitting on a wall. <br>";
    fputs($temp, $string);
}
rewind($temp);
while (1) {
    $string = fgets($temp);
    if (!$string) {
        break;
    }
    echo $string;
}

fclose($temp);
