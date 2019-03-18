<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../styles/normalize.css" type="text/css" />
        <link rel="stylesheet" href="../styles/adminPageStyle.css" type="text/css" />
        <title>Admin Page</title>
    </head>
    <body>
        <main>
            <h1>CMS Portfolio</h1>
            <form action="addContent.php" method="post">
               <input type="submit" name="addButton" value="Add" />
            </form>
            <form action="editContent.php" method="post">
                <select name="aboutMeSectionEditing">

                </select>
                <input type="submit" name="editButton" value="Edit" />
            </form>
            <form action="#" method="post">
                <select name="aboutMeSectionRemoval">

                </select>
                <input type="submit" name="removeButton" value="Remove" />
            </form>
            <button>
                <a href="../index.php">Go to Main Page</a>
            </button>
        </main>
    </body>
</html>
