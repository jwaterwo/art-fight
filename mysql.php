<?php
    // this file is used to specify the details for the mysql server
    // do not modify this file. mysql details can be found in mysql-cfg.php
    
    // check to see if mysql config file exists. load or redirect
    if (file_exists("mysql-cfg.php")) {
        $mysql = include 'mysql-cfg.php';
    } else {
        header('Location: setup.php');
    }

    //connect to mysql database
    mysql_connect($mysql['hostname'],$mysql['username'],$mysql['password']);
    @mysql_select_db($mysql['database']) or die( "Unable to select database");

    // remove this variables so they cant be printed later
    unset($mysql);
?>

