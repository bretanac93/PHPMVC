<?php
class View{
    
    function __construct() {
    }
    
    public function render($name, $noInclude = false){
        
        if($noInclude == true){
            require 'View/'.$name.'.php';
        }
        else{
            require 'View/header.php';
            require 'View/'.$name.'.php';
            require 'View/footer.php';
        }
    }
}