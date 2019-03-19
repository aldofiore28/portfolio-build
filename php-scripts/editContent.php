<?php

require 'functions/dbConnection.php';
require 'functions/populateTextAreaEdit.php';

$db = getDBConn();

if (isset($_POST['editButton'])) {
    $idSelectedContent = $_POST['aboutMeSectionEditId'];
    $resultQuery = getSelectedItem($db, $_POST['aboutMeSectionEditId']);
    $textToPopulate = generateStringSelectedValue($resultQuery);
} else if (isset($_POST['edit'])) {

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
<?php echo $textToPopulate; ?>
                </textarea>
                <input type="submit" name="edit" value="Edit" />
            </form>

            <button>
                <a href="adminPage.php">Go to Admin Page</a>
            </button>
        </main>
    </body>

</html>
