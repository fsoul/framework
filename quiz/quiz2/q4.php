<?php

echo __FILE__, nl2br(PHP_EOL);
/**
 * Original code produce en error
 *  (function Hello() {
        echo "Hello world!";
    })();
 *
 */


(function () {
    echo "Hello world!";
})();

echo nl2br(PHP_EOL), '___________________________________________________________________________', nl2br(PHP_EOL);
