<?php


interface Speak{
    public function speak();
}

interface Program{
    public function java();
    public function vueLara();
}


class American implements Speak{

    public function speak(){
        echo "American talking about is";
    }

}

class Myanmar implements Speak{
    public function speak(){
        echo "Myanmar talking is";
    }
}

class Programmer implements Program{

    public function java(){
        return "Java is So Smart";
        
    }

    public function vueLara(){
        return "Vue Laravel is So Smart";
        
    }
    
}

$american=new American();
echo $american->speak(); 

echo "<hr>";

$program=new Programmer();
echo $program->java();
echo "<br>";
echo $program->vueLara();