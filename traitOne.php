<?php

trait Cherry{
    public function love(){
        echo "Cherry Mg Mg is so beautiful";
    }
}

trait Mg{
    public function careful{
        echo "Cherry Mg Mg is so carefully";
    } 
}

class Min{
    use Cherry,Mg;

    public function foreverLove(){
        $this->Cherry();
        $this->Mg();
    }
}

$min=new Min();
$min->foreverLove();













?>