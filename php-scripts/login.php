<?php ?>

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
            <input id="password" type="text" name="username" />
            <input class="button" type="submit" value="LOGIN" />
        </form>
    </main>
</body>
</html>