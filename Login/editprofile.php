<?php include_once("mysql_connect.php"); ?>
<?php
session_start();

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$id = $_SESSION['id'];


$fnamesql = "SELECT FirstName FROM Profiles WHERE id='$id'";

$fnamequry = mysql_query($fnamesql);
$livefname = mysql_fetch_array($fnamequry);

if($livefname['FirstName']!=null){
	echo "Has First Name<br />";
	$sql = "UPDATE Profiles SET FirstName = '$fname', LastName = '$lname' WHERE id='$id';";
	$qury = mysql_query($sql);

	if(!$qury)
	{
		echo "Failed ".mysql_error();
		echo "<br /><a href='profile.php'>Profile</a>";
		echo "<br /><a href='logout.php'>Log Out</a>";
	}
	else
	{
		echo "Successfully added data";
		echo "<br /><a href='profile.php'>Profile</a>";
		echo "<br /><a href='logout.php'>Log Out</a>";
	}
}
else{
	echo "Does Not Have a First Name<br />";
	$sql = "INSERT into Profiles (id,FirstName,LastName) values('$id','$fname','$lname')";
	$qury = mysql_query($sql);

	if(!$qury)
	{
		echo "Failed ".mysql_error();
		echo "<br /><a href='profile.php'>Profile</a>";
		echo "<br /><a href='logout.php'>Log Out</a>";
	}
	else
	{
		echo "Successfully added data";
		echo "<br /><a href='profile.php'>Profile</a>";
		echo "<br /><a href='logout.php'>Log Out</a>";
	}
}

?>