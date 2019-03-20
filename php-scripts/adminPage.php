<?php

require_once 'functions/dbConnection.php';
require_once 'functions/populateDropdown.php';
require_once 'functions/queryDeleteContent.php';
require_once 'functions/errorHandlers.php';

$db = getDBConn();

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
            <form action="adminPage.php" method="post">
                <select name="aboutMeSectionRemoval">
                    <?php echo $result; ?>
                </select>
                <input type="submit" name="removeButton" value="Remove" />
            </form>
                    <?php
                        if (isset($errorMessage)) {
                            echo $errorMessage;
                        }
                     ?>
            <button>
                <a href="../index.php">Go to Main Page</a>
            </button>
        </main>
    </body>
</html>