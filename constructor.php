<?php


class javaDeveloper{

    public $name="Min Min Phyo";
    public $age=21;
    public $lang="Java";
    public $goal="Java Developer";



    public function getLanguage(){
        return $this->lang;
    }

    public function getGoal(){
        return $this->goal;
    }


}

class vueLaravelDeveloper{

  public $name="Min Min Phyo";
  public $age=21;
  public $lang="Vue+Laravel";
  public $goal="Web Developer";

  public function getLanguage(){
    return $this->lang;
  }

  public function getWebDeveloper(){
    return $this->goal;
  }

}

class Programmer extends vueLaravelDeveloper{

    public function getProgrammer(){
        return "I am Programmer";

    }
}

$programmer=new Programmer();
echo $programmer->getProgrammer();
echo "<br>";

echo $programmer->getLanguage();
echo "<br>";
echo $programmer->getWebDeveloper();

























?>