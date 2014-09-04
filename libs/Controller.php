<?php
class Controller {

    function __construct() {
        $this-> view = new View();
    }
    public function render($name){
        require 'View/'.$name.'.php';
    }
}