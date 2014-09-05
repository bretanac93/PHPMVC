<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        require 'Model/login_model.php';
        $model = new Login_Model();
        $this->view->render('login/index');
    }

}