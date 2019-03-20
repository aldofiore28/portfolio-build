<?php

require 'functions/dbConnection.php';
require 'functions/populateTextAreaEdit.php';
require 'functions/queryEditContent.php';

$db = getDBConn();

if (isset($_POST['editButton'])) {
    $idTextToEdit = $_POST['aboutMeSectionEditId'];
    $arrayTextToPopulate = getSelectedItem($db, $idTextToEdit);
    $textToPopulate = printSelectedItem($arrayTextToPopulate);
    $idToEdit = $arrayTextToPopulate['id'];
}
else if (isset($_POST['edit'])) {
    $idTextToEdit = $_POST['editId'];
    $editedText = $_POST['contentToEdit'];
    $resultQuery = updateSelectedText($db, $idTextToEdit, $editedText);
    if ($resultQuery) {
        $errorMessage = '<p class="confirmation">The content has been edited!</p>';
    } else {
        $errorMessage = '<p class="error">Fatal Error!</p>';
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
    echo $textToPopulate;
?>
                </textarea>
                <?php
                if (isset($idToEdit)) {
                    echo '<input type="hidden" value=' . $idToEdit . ' name="editId">';
                }
                ?>
                <input type="submit" name="edit" value="Edit" />
            </form>

            <button>
                <a href="adminPage.php">Go to Admin Page</a>
            </button>
            <?php echo $errorMessage; ?>
        </main>
    </body>

</html>
