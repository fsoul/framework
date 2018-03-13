<?php

declare(strict_types=1);

echo __FILE__, nl2br(PHP_EOL);

/**
 * Original code
 *
 * function multiply(float $a, float $b): int {
        return $a * $b;
    }
 *
 * Fatal error: Uncaught TypeError
 */

function multiply(int $a, int $b): int {
    return $a * $b;
}

$six = multiply(2,3);

echo gettype($six);

echo nl2br(PHP_EOL), '___________________________________________________________________________', nl2br(PHP_EOL);
