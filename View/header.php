<!DOCTYPE HTML>
<html>
    <head>
        <title>Testing MVC</title>
        <link rel="stylesheet" href="<?php echo URL;?>public/css/page.css" />
        <script src="<?php echo URL;?>public/js/jquery.js"></script>
        <script src="<?php echo URL;?>public/js/custom.js"></script>
    </head>
    <body>
        <?php Session::init(); ?>
        <header>
            Header
            <br />
            <ul>
                <li><a href="<?php echo URL;?>index">Index</a></li>
                <li><a href="<?php echo URL;?>Help">About</a></li>
                <?php if(Session::get('loggedIn') == true): ?>
                    <li><a href="<?php echo URL;?>dashboard/logout">Logout</a></li>
                <?php else: ?>
                    <li><a href="<?php echo URL;?>login">Login</a></li>
                <?php endif; ?>
            </ul>
        </header>
        <div id="content">