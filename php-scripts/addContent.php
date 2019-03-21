<?php

require_once 'functions/dbConnection.php';
require_once 'functions/queryAddContent.php';
require_once 'functions/errorHandlers.php';

session_start();
$db = getDBConn();

if (!isset($_SESSION['loggedIn'])) {
    header('Location: login.php');
} else {
    $_SESSION['loggedIn'] = true;
}

if (isset($_POST['logout'])) {
    header('Location: login.php');
}

if (isset($_POST['add'])) {
    $textToCheck = $_POST['toAddContent'];
    if (validateText($textToCheck)) {
        $textToAdd = sanitizationText($textToCheck);
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
    <form class="logout-button" action="login.php" method="POST">
       <input type="submit" name="logout" value="Log Out">
    </form>
    <main>
        <h1>Add Content</h1>
        <form id="formReference" method="POST" action="addContent.php">
            <textarea name="toAddContent" form="formReference" placeholder="New Content..."></textarea>
            <input type="submit" value="Add!" name="add" />
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
