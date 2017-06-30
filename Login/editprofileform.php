<html>
<head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
    <link href="Layout.css" rel="stylesheet" />
</head>
<body>
    <ul class="list">
    	<li class="item"><a href="profile.php">Profile</a></li>
        <li class="item"><a href="logout.php">Log out</a></li>
    </ul>
    <h1>Edit Profile</h1>
    <form id="siteSignupForm" action="editprofile.php" method="POST">
        <label for="first_name">First Name: </label>
        <input type="text" name="first_name" value="hi"><br />
        <label for="last_name">Last Name: </label>
        <input type="text" name="last_name"><br />
        <input type="submit">
    </form>
</body>
</html>