<?php

/*

Visibility Modifiers
Visibility determines where properties and methods can be accessed:

public: Can be accessed from anywhere (outside and inside the class).
protected: Can only be accessed within the class and its child classes.
private: Can only be accessed within the class itself.

*/
class Phone {
    public $brand;
    protected $price;
    private $secretCode;

    public function __construct($brand, $price, $secretCode) {
        $this->brand = $brand;
        $this->price = $price;
        $this->secretCode = $secretCode;
    }

    public function getPrice() {
        return $this->price;  // Allowed (protected accessed within the class)
    }

    private function unlockPhone() {
        return "Unlocking with code: " . $this->secretCode;  // Private method
    }
}
echo $myPhone->brand;  // Accessible (public)
echo $myPhone->getPrice();  // Accessible (protected via method)
// echo $myPhone->secretCode;  // Error (private)
?>