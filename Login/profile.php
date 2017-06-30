<?php
session_start();
include_once("mysql_connect.php");

$id = $_SESSION['id'];

$fnamesql = "SELECT FirstName FROM Profiles WHERE(id='$id')";
$lnamesql = "SELECT LastName FROM Profiles WHERE(id='$id')";

$fnamequry = mysql_query($fnamesql);
$fname = mysql_fetch_array($fnamequry);
$lnamequry = mysql_query($lnamesql);
$lname = mysql_fetch_array($lnamequry);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link href="Layout.css" rel="stylesheet" />
</head>
<body>
    <ul class = "list">
        <li class="item"><a href="editprofileform.php">Edit Profile</a></li>
        <li class="item"><a href="logout.php">Log Out</a></li>
    </ul>
    <h1>Profile</h1>
    <h3><?php echo $fname['FirstName'] ?> <?php echo $lname['LastName'] ?></h3>
</body>
</html>