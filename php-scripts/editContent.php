<?php

require_once 'functions/dbConnection.php';
require_once 'functions/populateTextAreaEdit.php';
require_once 'functions/queryEditContent.php';
require_once 'functions/errorHandlers.php';

$db = getDBConn();

if (isset($_POST['editButton'])) {
    $idTextToEdit = $_POST['aboutMeSectionEditId'];
    $arrayTextToPopulate = getSelectedItem($db, $idTextToEdit);
    $textToPopulate = printSelectedItem($arrayTextToPopulate);
} else if (isset($_POST['edit'])) {
    $idTextToEdit = $_POST['editId'];
    $textToSanitize = $_POST['contentToEdit'];
    $editedText = sanitizationText($textToSanitize);
    if (validateText($editedText)) {
        $resultQuery = updateSelectedText($db, $idTextToEdit, $editedText);
        $errorMessage = resultQueryErrors($resultQuery);
    } else {
        $result = false;
        $errorMessage = resultQueryErrors($result);
    }
}

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
            <textarea form="formReference" name="contentToEdit">
                <?php
                if (isset($textToPopulate)) {
                    echo $textToPopulate;
                }
                ?>
            </textarea>
            <?php
            if (isset($idTextToEdit)) {
                echo generateHiddenInputWithId($idTextToEdit);
            }
            ?>
            <input type="submit" name="edit" value="Edit" />
        </form>

        <button>
            <a href="adminPage.php">Go to Admin Page</a>
        </button>
        <?php
        if (isset($errorMessage)) {
            echo $errorMessage;
        }
        ?>
        </main>
    </body>

</html>
