<?php
/*
Encapsulation refers to restricting access to certain properties or methods of a class and only allowing controlled access through public methods (getters and setters).
*/
class BankAccount{
    private $balance = 0 ;

    public function deposit($amount){
        $this->balance +=$amount;
    }

    public function getBalance(){
        return $this->balance;
    }

}

$account = new BankAccount();
$account->deposit(500);
echo $account->getBalance(); //500
?>