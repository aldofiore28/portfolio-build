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
               <input class="sizeContentChangeButton" type="submit" name="addButton" value="Add" />
            </form>
            <form action="editContent.php" method="post">
                <select name="aboutMeSectionEditing">

                </select>
                <input class="sizeContentChangeButton" type="submit" name="editButton" value="Edit" />
            </form>
            <form action="#" method="post">
                <select name="aboutMeSectionRemoval">

                </select>
                <input class="sizeContentChangeButton" type="submit" name="removeButton" value="Remove" />
            </form>
            <form action="../index.php">
                <input type="submit" value="Go to Main Page"/>
            </form>
        </main>
    </body>
</html>
