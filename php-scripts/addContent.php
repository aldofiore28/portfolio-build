<?php

require_once 'functions/dbConnection.php';
require_once 'functions/queryAddContent.php';
require_once 'functions/errorHandlers.php';

$db = getDBConn();

if (isset($_POST['add'])) {
    $textToSanitize = $_POST['toAddContent'];
    if (validateText($textToSanitize)) {
        $textToAdd = sanitizationText($textToSanitize);
        $resultQuery = insertTextInDB($db, $textToAdd);
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
    <title>Add Content</title>
</head>

<body>
    <main>
        <h1>Add Content</h1>
        <form id="formReference" method="POST" action="addContent.php">
            <textarea name="toAddContent" form="formReference" placeholder="New Content..."></textarea>
            <input type="submit" value="Add!" name="add" />
        </form>
        <button>
            <a href="adminPage.php">Go to Admin Page</a>
        </button>
        <?php echo $errorMessage; ?>
    </main>
</body>

</html>
