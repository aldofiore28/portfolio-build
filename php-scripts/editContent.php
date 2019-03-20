<?php

require 'functions/dbConnection.php';
require 'functions/populateTextAreaEdit.php';
require 'functions/queryEditContent.php';
require 'functions/errorHandlers.php';

$db = getDBConn();

if (isset($_POST['editButton'])) {
    $idTextToEdit = $_POST['aboutMeSectionEditId'];
    $arrayTextToPopulate = getSelectedItem($db, $idTextToEdit);
    $textToPopulate = printSelectedItem($arrayTextToPopulate);
}
else if (isset($_POST['edit'])) {
    $idTextToEdit = $_POST['editId'];
    $editedText = $_POST['contentToEdit'];
    $resultQuery = updateSelectedText($db, $idTextToEdit, $editedText);
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
    echo $textToPopulate;
?>
                </textarea>
                <?php
                    echo generateHiddenInputWithId($idTextToEdit);
                ?>
                <input type="submit" name="edit" value="Edit" />
            </form>

            <button>
                <a href="adminPage.php">Go to Admin Page</a>
            </button>
            <?php echo resultQueryErrors($resultQuery); ?>
        </main>
    </body>

</html>
