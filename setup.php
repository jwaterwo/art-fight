<?php
    // this will be used to setup/modify the mysql database, and the main admin user
    
    // if we have created our configs, we souldnt be accessing this page
    if (file_exists("mysql-cfg.php")) {
        header('Location: index.php');
	die;
    }

?>

<html>
    <head>
        <link rel="stylesheet" href="stylesheet/setup.css">
    </head>

   <body>

        <img src="artfight.png" alt="art-fight goes here" class="banner" />
        <p/>

        <div class="setup_text">
            <b>Welcome to the Art-Fight setup page.</b>
            <br/>
            Please fill out the below details to get started.
        </div>

        <div class="setup_box">
            <table>
                <form>
                    <tr><td>MySQL Server Details</td></tr>
                    <tr><td><input type="text" name="hostname" placeholder="hostname"/></td></tr>
                    <tr><td><input type="text" name="username" placeholder="username"/></td></tr>
                    <tr><td><input type="text" name="password" placeholder="password"/></td></tr>
                    <tr><td><input type="submit" value="Submit"></td></tr>
                </form>
            </table>
            Need help? Read <a href="https://github.com/jwaterwo/art-fight">this page</a>
        </div>

    </body>
</html>
  

<?php

    // mysql command to create db:
    // CREATE DATABASE menagerie;

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
