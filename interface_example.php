<?php
interface Playable{
    public function play();
    public function pause();
}
class VideoGame implements Playable{
    public function play(){
        echo "playing the game";
    }
    public function pause()
    {
        echo "game pause";
    }
}
$game = new VideoGame();
$game->play();
$game->pause();

