<?php

/**
 * Runs a SQL query that retrieves the username and the password from the database.
 *
 * @param PDO $db The database connection.
 *
 * @return array Array with the username and password.
 */
function getAdminPassword (PDO $db) : array {
    $query = $db->prepare('SELECT `username`, `password` FROM `admin`');
    $query->bindParam(':username', $username);
    $query->execute();
    return $query->fetch();
}

/**
 * Takes the value with the key 'username' and returns it.
 *
 * @param array $adminDetails Array with all the information.
 *
 * @return string String with the username.
 */
function getUsernameInAString (array $adminDetails) : string {
    if (array_key_exists('username', $adminDetails)) {
        return $adminDetails['username'];
    } else {
        return '';
    }
}

/**
 * Takes the value with the key 'password' and returns it.
 *
 * @param array $adminDetails Array with all the information.
 *
 * @return string String with the password.
 */
function getPasswordInAString (array $adminDetails) : string {
    if (array_key_exists('password', $adminDetails)) {
        return $adminDetails['password'];
    } else {
        return '';
    }
}

/**
 * Checks if the username inputted from the login form and the one retrieved from the
 * database are the same.
 *
 * @param string $inputUsername Username inputted from the user.
 * @param string $retrievedUsername Username retrieved from the database.
 *
 * @return bool Returns false if they are not the same, true if they are the same.
 */
function checkLogin (string $inputUsername, string $retrievedUsername) : bool {
    if ($retrievedUsername !== $inputUsername) {
        return false;
    } else {
        return true;
    }
}