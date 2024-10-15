<?php
/*
Polymorphism allows methods in different classes to have the same name but different implementations.
*/
class Bird {
    public function fly() {
        return "Birds can fly.";
    }
}

class Penguin extends Bird {
    public function fly() {
        return "Penguins cannot fly!";
    }
}
$bird = new Bird();
$penguin = new Penguin();
echo $bird->fly();  // Output: Birds can fly.
echo $penguin->fly();  // Output: Penguins cannot fly!
?>