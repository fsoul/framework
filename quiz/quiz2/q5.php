<?php

declare(strict_types=1);

echo __FILE__, nl2br(PHP_EOL);

function multiply4(float $a, float $b): float {
    return (double)$a * (double)$b;
}

$six = multiply4(2,3);

echo gettype($six);  // Double - in historical reason
// http://php.net/manual/ru/function.gettype.php

echo nl2br(PHP_EOL), '___________________________________________________________________________', nl2br(PHP_EOL);
