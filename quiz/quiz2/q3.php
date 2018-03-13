<?php

echo __FILE__, nl2br(PHP_EOL);

$array = [
    1,
    4,
    7,
    4,
    3,
    2,
    8
];

// Функция сравнения
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

uasort($array, 'cmp');

var_dump($array);

echo nl2br(PHP_EOL), '___________________________________________________________________________', nl2br(PHP_EOL);
