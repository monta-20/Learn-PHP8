<?php
/*
An interface defines a set of methods that a class must implement. Interfaces only define the method signature, not the actual implementation.
*/

interface Vehicle {
    public function startEngine();
}

class Car implements Vehicle {
    public function __construct()
    {
        
    }
    public function startEngine()
    {
        return "Car engine started.";
    }
}
$myCar = new Car();
echo $myCar->startEngine(); //Car engine started.

/*
nterfaces are like contracts that classes must follow.
Classes use the implements keyword to implement an interface.

*/
?>