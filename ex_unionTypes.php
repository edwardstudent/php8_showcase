<?php

declare(strict_types=1);

function doubleIt(int|float $num) : int|float {
// function doubleIt(int $num) : int {
    return $num * 2;
}

// echo doubleIt(3);
echo doubleIt(3.3);
// echo doubleIt('test');