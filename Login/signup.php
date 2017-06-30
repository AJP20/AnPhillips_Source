  <?php include_once("mysql_connect.php"); ?>

  <?php
  $email = $_POST['email'];
  $password = $_POST['pwd'];
  $sql = "INSERT into Users (Email,Password) values('$email','$password')";
  $qury = mysql_query($sql);
  if(!$qury)
  {
    echo "Failed ".mysql_error();
    echo "<br /><a href='signupform.php'>SignUp</a>";
    echo "<br /><a href='loginform.php'>Log In</a>";
  }
  else
  {
    echo "Successful";
    echo "<br /><a href='loginform.php'>Log In</a>";
  }
  ?>