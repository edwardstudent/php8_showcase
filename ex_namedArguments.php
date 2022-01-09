<?php

function getFullName($firstName = '(unknown)', $lastName = '(unknown)') {
    return "$firstName $lastName";
}

echo "<p>" . getFullName('Wanda', 'Androshka') . "</p>";
echo "<p>" . getFullName('Wanda') . "</p>";
echo "<p>" . getFullName(lastName: 'Androshka') . "</p>";