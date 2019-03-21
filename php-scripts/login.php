
<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="../styles/normalize.css">
    <link type="text/css" rel="stylesheet" href="../styles/loginStyles.css">
    <title>Login Page</title>
</head>

<body>
    <main>
        <h1>Login</h1>
        <form action="adminPage.php" method="POST">
            <label for="username">username</label>
            <input id="username" type="text" name="username" />
            <label for="password">password</label>
            <input id="password" type="password" name="password" />
            <input class="button" type="submit" value="Login" />
        </form>
    </main>
</body>
</html>