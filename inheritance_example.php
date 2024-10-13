<?php
class Vehicle{
    public $make;
    public $model;
    
    public function __construct($make,$model)
    {
        $this->make=$make;
        $this->model=$model;
    }
    
    public function display()
    {
        echo "Make : $this->make, Model : $this->model";
    }
}
class Car extends Vehicle{
    public $speed;
    public function __construct($name,$model,$speed){
        parent::__construct($name,$model); // calling parent constructor
        $this->speed=$speed;
    }
    //method overriding
    public function display()
    {
        parent::display();
        echo ", Speed : $this->speed";
    }
}
$car = new Car("Bugati","Chiron",420);
$car->display();
