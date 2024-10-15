<?php
/*
Static properties and methods belong to the class itself, not to any specific instance of the class. They can be accessed without creating an object.
*/

class MathHelper {
    public static $pi = 3.14 ;

    public static function square($number){
        return $number * $number ;
    }

}

echo MathHelper::$pi ;//3.14
echo '<br>';
echo MathHelper::square(10); //100
?>