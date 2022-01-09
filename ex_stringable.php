<?php
declare(strict_types=1);

class Tester {
    public function __toString() : string {
        return 'this object represented as string';
    }
}

function showIt(Stringable|string $text) {
    echo "<p>$text</p>";
}

$tester = new Tester();
showIt($tester);
showIt('this is a test');
// showIt(234); // won't work
