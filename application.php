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
	</body>
</html>
