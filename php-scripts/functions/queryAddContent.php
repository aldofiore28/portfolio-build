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