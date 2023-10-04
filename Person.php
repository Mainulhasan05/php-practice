<?php
class Person{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function introduce(){
        echo "My name is ".$this->name." and ";
        echo "I am ".$this->age." years old.\n";
    }
}

class Student extends Person{
    public $mark;
    public function __construct($name,$age,$mark){
        parent::__construct($name,$age);
        $this->mark=$mark;
    }
    public function introduce(){
        echo "My name is ".$this->name.", ";
        echo "I am ".$this->age." years old.\n";
    }
    public function calculate_grade_percentage(){
        return $this->mark."%\n";
    }
}

$person = new Person("John", 30);

$person->introduce();

$student = new Student("Robert", 18, "85");

$student->introduce();

$gradePercentage = $student->calculate_grade_percentage();

echo "My grade percentage is {$gradePercentage}.\n";