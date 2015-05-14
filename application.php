<!DOCTYPE html>
<?php
    // this is a PHP file, so lets make sure we have our open and close to build off of.
    // please use 4 spaces for code spacing.
?>
<html>
	<head>
		<title>Application</title>
    		<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    		<link rel="stylesheet" href="main.css">
	</head>
	<body>
<div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="/index_kelsey.php">Home</a></li>
          <li><a href="#">About</a></li>
        </ul>
        <ul class="pull-right">
          <li><a href="#">Register</a></li>
          <li><a href="#">Log In</a></li>
          <li><a href="/faq.php">FAQ</a></li>
        </ul>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1>Art Fight 2015</h1>
	        <p>Two Weeks. Two Teams. One Winner.</p>
	        <a href="#">Learn More</a>
      </div>
   </div> 

    <div class="guides">
        <div class="container">
   	    <h2>Apply To Help Out</h2>
                <p>Fill out the application to the best of your ability and someone will get in touch with you </p>
		 <center>
		<form>
		Username: <input type="text" name="username"> <p>
		Applying for: <input type="checkbox" name="Art" value="on"> Site Art
		<input type="checkbox" name="Moderation" value="on"> Moderation
		<input type="checkbox" name="Coding" value="on"> Coding help
		<p>
		Tell us about yourself : <br />
                <textarea rows="5" cols="50" name="description">
 We'd love to know a bit more..
                </textarea>
<p>
		What hours are you available : <br />
                <textarea rows="5" cols="50" name="description">
 List available hours and your time zone. 
                </textarea>
<p>
		Why are you interested in this postion: <br />
		<textarea rows="5" cols="50" name="description">
Tell us why you would like to help...
		</textarea>
<p>
		<input type="submit" name="submit" value="Submit">
		</form>
<center>
    </div>
    <div class="learn-more">
	  <div class="container">
		<div class="row">
	      <div class="col-md-4">
			<h3>Teams</h3>
				<p>Help us decide on this years teams!</p>
				<p><a href="#">vote on teams for 2015</a></p>
	      </div>
		 <div class="col-md-4">
			<h3>Oppurtunities</h3>
				<p>Want to be a mod? Provide site art? </p>
				<p><a href="/application.php">Apply to help out Chronic and WN</a></p>
		  </div>
		  <div="col-md-4">
			<h3>Rules and Regulations</h3>
				<p>How to play the game, and a few simple rules</p>
				<p><a href="#">Read the Guide</a></p>
		  </div>
	    </div>
	  </div>
	</div>
	</body>
</html>
