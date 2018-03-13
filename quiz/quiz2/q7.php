<?php

declare(strict_types=1);

echo __FILE__, nl2br(PHP_EOL);

/**
 * Original code
 *
 *  function complicated($complusory, ...$extras, $animal){
        echo "I have " . func_get_args() . " arguments";
    }
 * Fatal error: Only the last parameter can be variadic
 */
function complicated7($complusory, $cat){
    echo "I have " . $complusory . $cat . " arguments";
}

complicated7(1, 'cat');

echo nl2br(PHP_EOL), '___________________________________________________________________________', nl2br(PHP_EOL);
