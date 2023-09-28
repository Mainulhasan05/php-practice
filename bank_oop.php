<?php

class BankAccount{
    public $balance=0;
    public $name="";
    function deposit($amount){
        $this->balance+=$amount;
    }
    function setName($name){
        $this->name=$name;
    }
}

$account=new BankAccount;
$account->setName('Md. Mainul Hasan');
$account->deposit(500);

var_dump($account);