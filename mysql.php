<?php
    // this file is used to specify the details for the mysql server
    // do not modify this file. mysql details can be found in mysql-cfg.php
    
    // check to see if mysql config file exists. load or redirect
    if (file_exists(mysql-cfg.php)) {
        $mysql = include 'mysql-cfg.php';
    } else {
        header('Location: setup.php');
    }

    // here are some example entires. we'll need some way to determine if they are "not set up" so we can redirect
    $username=$mysql['username'];
    $password=$mysql['password'];
    $database=$mysql['database']; // this will need to be unique per instance of art-fight

    // testing line. needs to be removed
    echo $username . "<br>" . $password . "<br>" . $database;

    //connect to mysql database
    mysql_connect("localhost",$username,$password);
    @mysql_select_db($database) or die( "Unable to select database");
?>

