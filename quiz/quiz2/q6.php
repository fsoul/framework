<?php

declare(strict_types=1);

echo __FILE__, nl2br(PHP_EOL);

function complicated($complusory, ...$extras){
    echo "I have " . func_get_args() . " arguments";
}

complicated(1,2,3,4); // this produce a Notice error: Array converted to string and out is
// I have Array arguments

echo nl2br(PHP_EOL), '___________________________________________________________________________', nl2br(PHP_EOL);
