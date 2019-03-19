<?php

/**
 * The following function will run an SQL query that will change the text selected from the admin page
 * with a new one that you insert in the text area. The textarea populates from the database, so you can
 * change a letter if you want.
 *
 * @param PDO $db Database connection
 * @param string $idOldText id from the text that you need to change
 * @param string $newText new text to save in the db
 *
 * @return bool Returns if the query has been executed or not.
 */
function updateSelectedText (PDO $db, string $idOldText, string $newText) : bool {
    $query = $db->prepare('UPDATE `about_me_section` SET `section` = :newText WHERE `id`=:idOldText');
    $query->bindParam(':idOldText',$idOldText);
    $query->bindParam(':newText',$newText);
    return $query->execute();
}

?>