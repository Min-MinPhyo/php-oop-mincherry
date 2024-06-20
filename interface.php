<?php

interface Programmer{
    public function java();
    public function vueLara();
}

class Min implements Programmer{

    public function java(){
        echo "I am java Developer";
    }

    public function vueLara(){
        echo "I am Vue Laravel Developer";
    }
    
}

$program=new Min();
$program->java();
$program->vueLara();



// this is abstract ,abstract is main character;
?>