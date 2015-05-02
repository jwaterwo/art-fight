<?php
    // this file is used to specify the details for the mysql server
    // it can be modified manually, but should be initially setup by the setup.php script
    
    // if this file is not setup, we should redirect to setup.php

    // here are some example entires. we'll need some way to determine if they are "not set up" so we can redirect
    $username="username";
    $password="password";
    $database="database"; // this will need to be unique per instance of art-fight

    //connect to mysql database
    mysql_connect("localhost",$username,$password);
    @mysql_select_db($database) or die( "Unable to select database");
?>

