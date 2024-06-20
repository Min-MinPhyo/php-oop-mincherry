<?php


class Student{

    public $name="Min Min Phyo";
    public $age=21;


    public function studentInfo(){
        return $this->name . "-" .$this->age;
    }


    public function getData(){
        return $this->studentInfo();
    }
}

$student=new Student();
echo $student->getData();
echo"<br>";

echo $student->studentInfo();

















?>