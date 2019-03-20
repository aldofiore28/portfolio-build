<?php

require 'functions/dbConnection.php';
require 'functions/populateDropdown.php';
require 'functions/queryDeleteContent.php';
require 'functions/errorHandlers.php';

$db = getDBConn();

//$arrayOfResults = getItemsFromDB($db);
//$result = populateDropdownEdit($arrayOfResults);

if (isset($_POST['removeButton'])) {
    $idTextToDelete = $_POST['aboutMeSectionRemoval'];
    $resultQuery = deleteSelectedContent($db, $idTextToDelete);
    $errorMessage = resultQueryErrors($resultQuery);
}

$arrayOfResults = getItemsFromDB($db);
$result = populateDropdownEdit($arrayOfResults);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/normalize.css">
        <link rel="stylesheet" type="text/css" href="../styles/adminPageStyle.css">
        <title>Admin Page</title>
    </head>
    <body>
        <main>
            <h1>CMS Portfolio</h1>
            <form action="addContent.php" method="post">
               <input class="centerButton" type="submit" name="addButton" value="Add" />
            </form>
            <form action="editContent.php" method="post">
                <select name="aboutMeSectionEditId">
                    <?php echo $result; ?>
                </select>
                <input type="submit" name="editButton" value="Edit" />
            </form>
            <form action="#" method="post">
                <select name="aboutMeSectionRemoval">
                    <?php echo $result; ?>
                </select>
                <input type="submit" name="removeButton" value="Remove" />
            </form>
                    <?php echo $errorMessage; ?>
            <button>
                <a href="../index.php">Go to Main Page</a>
            </button>
        </main>
    </body>
</html>
