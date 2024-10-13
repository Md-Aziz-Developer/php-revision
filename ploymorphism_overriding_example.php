<?php
class Animal{
    public function speak(){
        echo "Animal Sound";
    }
}
class Dog extends Animal{
    public function speak(){
        echo "bark";
    }
}
class Cat extends Animal{
    public function speak()
    {
        echo "meow";
    }
}
$dog= new Dog();
$dog->speak();

$cat=new Cat();
$cat->speak();

