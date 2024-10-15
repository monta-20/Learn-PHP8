<?php
class Animal {
    public $name ;

    public function __construct($name){
        $this->name = $name;
    }
    public function sound(){
        return $this->name . " makes a sound.";
    }
}

class Dog extends Animal {
    public function sound(){
        return $this->name. " barks.";
    }
}

$myDog = new Dog("Reksy");
echo $myDog->sound(); //Reksy barks.
?>