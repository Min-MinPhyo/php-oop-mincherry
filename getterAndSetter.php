<?php


class Students{
    private $name="Min";


    public function setName($name){
        $this->name=$name;
    }


    public function getName(){
        return $this->name;
    }

}



$student=new Students();
echo "<br>";

echo $student->setName("Min Min Phyo");

echo "<br>";
echo $student->getName();





?>