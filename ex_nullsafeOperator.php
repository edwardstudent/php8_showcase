<?php
ini_set('display_errors', 1);
error_reporting(~0);

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


