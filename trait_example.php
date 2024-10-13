<?php
trait Logger{
    public function log($message){
        echo "Log message : $message";
    }
}
class FileHandler{
    use Logger;
}

class DatabaseHandler{
    use Logger;
}

$fileHandler=new FileHandler();
$fileHandler->log("File Opened");

$dbHandler= new DatabaseHandler();
$dbHandler->log("Database Connected");