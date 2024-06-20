<?php

class Student{

    public static $name="Min Min";
    public static $age=21;

    public static function printInfo(){
        return static::$name."-".static::$age;
    }
}


var_dump(Student::printInfo());



?>