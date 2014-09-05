<?php
class Controller {

    function __construct() {
        $this-> view = new View();
    }
    public function render($name){
        require 'View/'.$name.'.php';
    }
    
    public function loadModel($name){
        $path = 'Model/'.$name.'_model.php';
        
        if(file_exists($path)){
            require 'Model/'.$name.'_model.php';
            $modelName = $name.'_model';
            $this->model = new $modelName();
        }
    }
}