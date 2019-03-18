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
            <form id="formReference" method="post" action="addContent.php">
                <textarea name="toAddContent" form="formReference" placeholder="New Content..."></textarea>
                <input type="submit" value="Add!" />
            </form>
            <button>
                <a href="adminPage.php">Go to Admin Page</a>
            </button>
        </main>
    </body>

</html>
