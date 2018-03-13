<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

foreach (glob("quiz/quiz2/*.php") as $filename) {
    include $filename;
}

echo nl2br(PHP_EOL), '___________________________________________________________________________', nl2br(PHP_EOL);
