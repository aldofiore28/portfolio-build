<?php

require 'functions/dbConnection.php';

$db = getDBConn();


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="../styles/normalize.css" type="text/css" />
        <link rel="stylesheet" href="../styles/addEditStyles.css" type="text/css" />
        <title>Edit Content</title>
    </head>

    <body>
        <main>
            <h1>Edit Content</h1>
            <form id="formReference" method="post" action="editContent.php">
                <textarea form="formReference" name="toEditContent">
                    <?php echo $finalString; ?>
                </textarea>
                <input type="submit" name="edit" value="Edit!" />
            </form>

            <button>
                <a href="adminPage.php">Go to Admin Page</a>
            </button>
        </main>
    </body>

</html>
