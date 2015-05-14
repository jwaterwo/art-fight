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

<?php
    /* lets determine what we are going to show on this page.
       do not actually set up anything until the final step.
    */

    /* check to see which step we are on and then 
       take the appropriate actions 
    */
    switch (htmlspecialchars($_POST["step"])) {
        case 1:
            // step one is setting up the mysql database

            /* we need to add some error hanlding here
               just incase we get a submit with a blank
               variable for hostname, username, or
               password.
               if fail, set an error. else, move on
            */
            $STEP = "0";
            if ( empty($_POST["hostname"]) ) {
                $ERROR="You did not enter a <b>hostname</b>.";
                break;
            }
            if ( empty($_POST["username"]) ) {
                $ERROR="You did not enter a <b>username</b>.";
                break;
            }
            if ( empty($_POST["password"]) ) {
                $ERROR="You did not enter a <b>password</b>.";
                break;
            }

            /* we will need to check to see if the
               credentials actually work no the database
               at this point.
               if we fail, set an error, else, move on
            */
            $conn = mysqli_connect($_POST["hostname"], $_POST["username"], $_POST["password"]);
            if (!$conn) {
                $ERROR="We were unable to <b>connect</b> to the database.";
                break;
            }else{
                $NOTICE="Connection to database <b>successfull</b>!";
            }

            // Set the step to 1 so we can show the next page
            $STEP = "1";
            break;

        case 2:
            break;
        default:
            $STEP = "0";
            break;
    }
?>

        <div class="setup_text">
            <b>Welcome to the Art-Fight setup page.</b>
            <br/>
            Please fill out the below details to get started.
        </div>

<?php
    // show error box if ERROR is set
    if ( isset($ERROR) ) {
        echo '<div class="error">';
        echo $ERROR;
        echo '</div>';
    }

    // show any notices we want (successes)
    if ( isset($NOTICE) ) {
        echo '<div class="notice">';
        echo $NOTICE;
        echo '</div>';
    }
?>

        <div class="setup_box">
            <table>
                <form action="setup.php" method="POST">
                    <tr><td>MySQL Server Details</td></tr>
                    <tr><td><input type="text" name="hostname" placeholder="hostname"/></td></tr>
                    <tr><td><input type="text" name="username" placeholder="username"/></td></tr>
                    <tr><td><input type="password" name="password" placeholder="password"/></td></tr>
                    <tr><td><input type="submit" value="Submit"></td></tr>
                    <input type="hidden" name="step" value="1"/>
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
