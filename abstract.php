<?php

abstract class Human{

    protected $name;
    protected $age;


    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;

    }

    public function getInfo(){
        return $this->name .'is Human and'.$this->age.' years old';
    }
}


class Student extends Human{
    public function getInfo(){
        return $this->name .'is Student and '.$this->age.' years old';
        
    }
}



$human=new Human("aa",11);
var_dump($human);

echo "<hr>";



$stu=new Student("Min Min Phyo",21);
echo $stu->getInfo();





?>