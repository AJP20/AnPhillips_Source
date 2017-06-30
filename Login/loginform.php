<html>
<head>
    <meta charset="utf-8">
    <title>Log In</title>
    <link href="Layout.css" rel="stylesheet" />
</head>
<body>
    <ul class = "list">
        <li class="item"><a href="signupform.php">Sign up</a></li>
    </ul>
    <h1>Log In</h1>
    <form id="siteLoginForm" action="login.php" method="POST">
    <label for="email">Email: </label>
        <input type="text" name="email"><br />
        <label for="password">Password: </label>
        <input type="password" name="pwd"><br />
        <input type="submit">
    </form>
</body>
</html>