<?php

declare(strict_types=1);

echo __FILE__, nl2br(PHP_EOL);

if (!is_callable(function () {
    echo "Hello";
})
) {
    function sayHello() {
        echo "World!";
    }
}

//sayHello();

echo nl2br(PHP_EOL), '___________________________________________________________________________', nl2br(PHP_EOL);
