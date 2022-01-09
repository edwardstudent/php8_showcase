<?php
ini_set('display_errors', 1);
error_reporting(~0);

// this was PHP 7's null coalescing operator
$result = null;
$status = $result ?? '(unknown)'; 
echo $status;
// but it didn't work for functions

// therefore PHP 8's nullsafe operator
class User {
    private $firstName;
    private $lastName;

    function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function getFullName() {
        return "$this->firstName $this->lastName";
    }
}

// $user = new User('Ivan', 'Ilroy');
$user = null;

// echo $user->getFullName(); // gets error if $user is null
echo $user?->getFullName();



