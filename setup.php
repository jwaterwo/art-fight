<?php
    // this will be used to setup/modify the mysql database, and the main admin user
    
    //temp line. this should be removed
    echo "if you are seeing this page, art-fight has not been setup correctly";

    // load up any existing values
    if (file_exists(mysql-cfg.php)) {
        $mysql = include 'mysql-cfg.php';
    }

    // a form to SET the volumes shoudl be created here, and display the pulled values (if they exist)
    /*
    $mysql['hostname']
    $mysql['username']
    $mysql['password']
    $mysql['database']
    */

    /* current hiding this, but eventually we'll need to setup a forum with the values from the below 
    // set the mysql variables from the form
    $mysql['hostname']= 'localhost';
    $mysql['username']= 'jack';
    $mysql['password']= 'ganymede';
    $mysql['database']= 'art-fight';
    if (file_put_contents('mysql-cfg.php', '<?php return ' . var_export($mysql, true) . ';')){
        // this runs on success to write file
    }else{
        // this runs upon failure to write file
    }
    */
?>
