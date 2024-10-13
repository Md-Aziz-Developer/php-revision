<?php
//Creating a basic class with simple method
class Player{
    public $name;
    public $score;
    //initailizing the properties 
    public function __construct($name,$score)
    {
        $this->name=$name;
        $this->score=$score;
    }

    //display function
    public function display()
    {
        echo "Player : $this->name, Score : $this->score";
    }
}
// creating an object 

$player1=new Player('aziz',90);
$player2= new Player('a',78);

$player1->display();

$player2->display();