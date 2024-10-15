<?php
/*
An abstract class cannot be instantiated directly and may contain abstract methods that must be implemented in child classes.
*/
abstract class Shape{
    abstract public function calculateArea();
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle(10, 20);
echo $rectangle->calculateArea();  // Output: 200

/*
Abstract classes cannot be instantiated directly.
Child classes must implement the abstract methods of the abstract class.
*/
?>