<?php

class Human{
    public $name="";
    function sayHi(){
        echo "Hello {$this->name}\n";
    }
    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
}

$obj1=new Human();
echo $obj1->sayHi();
$obj1->setName("Md. Mainul Hasan");
echo $obj1->sayHi();