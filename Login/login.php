<?php
include_once("mysql_connect.php");
?>
<?php
session_start();

$email = $_POST['email'];
$password = $_POST['pwd'];

$sql = "SELECT count(*) FROM Users WHERE(Email='$email' and  Password='$password')";

$idsql = "SELECT id FROM Users WHERE(Email='$email' and  Password='$password')";

$qury = mysql_query($sql);
$result = mysql_fetch_array($qury);
$idqury = mysql_query($idsql);
$id = mysql_fetch_array($idqury);


$_SESSION['id'] = $id['id'];
$_SESSION['email'] = $email;

if($result[0]>0)
{
  echo "Successful Login!";
  echo "<br />Welcome ".$_SESSION['email']."!";
  echo "<br /><a href='editprofileform.php'>Edit Profile</a>";
  echo "<br /><a href='profile.php'>Profile</a>";
  echo "<br /><a href='logout.php'>Log Out</a>";
}
else
{
  echo "Login Failed";
  echo "<br /><a href='signupform.php'>Sign Up</a>";
  echo "<br /><a href='loginform.php'>Log In</a>";
}
?>