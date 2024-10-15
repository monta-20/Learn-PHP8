<?php
/*
PHP provides a set of "magic methods" that are triggered in specific scenarios. They start with double underscores __.

Example:
__construct(): Called when an object is created.
__destruct(): Called when an object is destroyed.
__get() and __set(): Called when trying to get or set inaccessible properties.
__toString(): Called when the object is treated as a string.
php
*/


class Person {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function __toString() {
        return "Person: " . $this->name;
    }
}

$person = new Person("John");
echo $person;  // Output: Person: John


?>