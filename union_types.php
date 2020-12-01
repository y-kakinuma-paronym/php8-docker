<?php
declare(strict_types=1);

// int と string を型指定
$f = function (int|string $v) {
    var_dump($v);
};

$f(100); // ok
$f("abc"); // ok
$f(true); // ng