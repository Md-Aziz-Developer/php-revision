<?php
abstract class Game{
    abstract protected function startGame();
    
    public function endGame(){
        echo 'game over';
    }
}
class Football extends Game{
    
     protected function startGame(){
        echo 'Football game start';
    }
    public function startGame1(){
       $this->startGame();
    }
}
$game =new Football();
$game->startGame1();
$game->endGame();