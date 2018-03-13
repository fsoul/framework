<?php

$file = __DIR__ . "/clear_list.txt";

$lines = file(__DIR__ . "/list.txt");

$cnt = 1;

$current = file_get_contents($file);

$uri = 'http://www.panel.kantartns.lt/LT/';
$ext = '.html';

function clearNL($str){
    return preg_replace( "/\r|\n/", "", $str);
}

foreach ($lines as $n => $line) {
    if (strlen($line) == 1) {

        echo $n, nl2br(PHP_EOL);
        echo $lines[$n+1] , nl2br(PHP_EOL);
        echo $lines[$n+2] , nl2br(PHP_EOL);
        $current .= $cnt . ". ". $uri . clearNL($lines[$n + 1]) . $ext . " - " . $lines[$n + 2] . PHP_EOL;
        $cnt++;
    }
}

file_put_contents($file, $current);
