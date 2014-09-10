<!DOCTYPE HTML>
<html>
    <head>
        <title>Testing MVC</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/page.css" />
        <script src="<?php echo URL; ?>public/js/jquery.js"></script>
        <script src="<?php echo URL; ?>public/js/custom.js"></script>
        <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script src="'. URL .'View/'. $js .'"></script>';
            }
        }
        ?>
    </head>
    <body>
        <?php Session::init(); ?>
        <header>
            Header
            <br />
            <ul>
                <?php if (Session::get('loggedIn') == false): ?>
                    <li><a href="<?php echo URL; ?>index">Index</a></li>
                    <li><a href="<?php echo URL; ?>Help">About</a></li>
                <?php endif; ?>
                <?php if (Session::get('loggedIn') == true): ?>
                    <li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>
                    <?php if (Session::get('role') == 'owner'): ?>
                        <li><a href="<?php echo URL; ?>user">Users</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo URL; ?>dashboard/logout">Logout</a></li>
                <?php else: ?>
                    <li><a href="<?php echo URL; ?>login">Login</a></li>
                <?php endif; ?>
            </ul>
        </header>
        <div id="content">