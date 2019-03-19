<?php

/**
 * The following function will run a query that will insert the text from the input page to the
 * database, to be shown in the main page.
 *
 * @param PDO $db Database connection
 * @param string $text The inputted text
 *
 * @return bool Returns a boolean that is the result of the execute() function to run the query.
 */
function insertTextInDB (PDO $db, string $text) : bool {
    $query = $db->prepare('INSERT INTO `about_me_section` (`section`) VALUES (:text);');

    $query->bindParam(':text', $text);

    return $query->execute();
}

/**
 * The following function will check if the query has been executed and it will return an output
 * on screen confirming it.
 *
 * @param bool $bool The result of the query
 *
 * @return string HTML tag to print in the account page.
 */
function checkAddedTextWorked (bool $bool) : string {
    if ($bool) {
        return '<p class="confirmation">The text has been added to the database!</p>';
    } else {
        return '<p class="error">There was a problem! The text has not been added to the database!</p>';
    }
}