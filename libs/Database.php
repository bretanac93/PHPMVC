<?php
class Database extends PDO{

    function __construct() {
        parent::__construct('mysql:host=localhost:4430;dbname=mvc', 'root', '');
    }
}