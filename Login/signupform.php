<html>
<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link href="Layout.css" rel="stylesheet" />
</head>
<body>
    <ul class = "list">
        <li class="item"><a href="loginform.php">Log In</a></li>
    </ul>
    <h1>Sign Up</h1>
    <form id="siteSignupForm" action="signup.php" method="POST">
        <label for="email">Email: </label>
        <input type="text" name="email"><br />
        <label for="password">Password: </label>
        <input type="password" name="pwd"><br />
        <input type="submit">
    </form>
</body>
</html>