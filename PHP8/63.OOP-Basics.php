<?php
class Car {
    public $color;
    public $model;

    public function __construct($color,$model){
        $this->color = $color;
        $this->model = $model ;
    }
    
    public function displayCar(){
        return "This car is a ".$this->model." ".$this->color;
    }
}

$myCar = new Car("BMW","Black");
echo $myCar->displayCar(); //This car is a Black BMW
?>