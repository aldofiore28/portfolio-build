<?php ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="../styles/normalize.css" type="text/css" />
        <link rel="stylesheet" href="../styles/addEditStyles.css" type="text/css" />
        <title>Add Content</title>
    </head>

    <body>
        <main>
            <h1>Add Content</h1>
            <form method="post" action="addContent.php">
                <textarea cols="10" rows="10" placeholder="New Content..."></textarea>
                <input type="submit" value="Add!" />
            </form>
            <form action="adminPage.php">
                <input class="goBackButton" type="submit" value="Go back to admin Page!">
            </form>
        </main>
    </body>

</html>
