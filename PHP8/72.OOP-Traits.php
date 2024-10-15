<?php
/*

Traits are a way to reuse code in multiple classes. They allow you to include methods in different classes without using inheritance.
*/
trait Logger {
    public function log($message){
        echo "Log: $message". "<br>";
    }
}
class User {
    use Logger ;
}

class Product {
    use Logger ;
}

$user = new User();
$user->log("Montassar"); //Log: Montassar

$product = new Product();
$product->log("Clothes"); //Log: Clothes
/*
Traits are used to share common functionality across multiple classes.
Classes use the use keyword to include traits.
*/
?>