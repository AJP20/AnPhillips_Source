<?php
include_once("mysql_connect.php");
?>
<?php
	session_start(); # Starts the session

	session_unset();

	session_destroy(); #destroys the session

	if(!$_SESSION['email']){
		echo "Successfully logged out!<br />";
		echo "<br /><a href='signupform.php'>Sign Up</a>";
  		echo "<br /><a href='loginform.php'>Log In</a>";
  	}
	else
		echo "Error Occured!!<br />";
	?>