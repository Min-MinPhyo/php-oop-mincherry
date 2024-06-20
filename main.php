<?php



class Student{
    // protected $name;
    // protected $age;

    private $name;
    private $age;
    


    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

}

class ProgrammingStudent extends Student{
    public function printInfo(){
        return $this->name . "--".$this->age;

    }
}

$pStudent=new ProgrammingStudent("Min Min Phyo",21);

 echo $pStudent->printInfo();
 echo "<br>";



?>