<?php
error_reporting(E_ALL);
//Creating a basic class with simple method
class Player{
    private $name;
    private $score;
    //initailizing the properties 
    public function __construct($name,$score)
    {
        $this->name=$name;
        $this->score=$score;
    }

    //display function
    public function display()
    {
        return "Player : $this->name, Score : $this->score";
    }
}
// creating an object 

$player1=new Player('aziz',90);

echo $player1->display();
echo $player1->name;  // it will throgh a fatal error
