<?php

require_once 'functions/dbConnection.php';
require_once 'functions/populateDropdown.php';
require_once 'functions/queryDeleteContent.php';
require_once 'functions/errorHandlers.php';
require_once 'functions/getAdminInfo.php';

session_start();
$db = getDBConn();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $username = filter_var($username, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST['password'];
    $password = filter_var($password, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $adminDetails = getAdminPassword($db);
    $retrievedUsername = getUsernameInAString($adminDetails);
    $retrievedPassword = getPasswordInAString($adminDetails);
    if (!checkLogin($username, $retrievedUsername) || !password_verify($password, $retrievedPassword)) {
        header('Location: login.php');
    } else {
        $_SESSION['loggedIn'] = true;
    }
}

if (!isset($_SESSION['loggedIn'])) {
    header('Location: login.php');
}

if (isset($_POST['logout'])) {
    session_destroy();
    session_abort();
    header('Location: login.php');
}

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
        <form class="logout-button" action="login.php" method="POST">
            <input type="submit" name="logout" value="Log Out">
        </form>
        <main>
            <h1>CMS Portfolio</h1>
            <form action="addContent.php" method="POST">
               <input class="centerButton" type="submit" name="addButton" value="Add" />
            </form>
            <form action="editContent.php" method="POST">
                <select name="aboutMeSectionEditId">
                    <?php echo $result; ?>
                </select>
                <input type="submit" name="editButton" value="Edit" />
            </form>
            <form action="adminPage.php" method="POST">
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