<?php

/**
 * The following function will run a SQL query that will update the 'deleted'
 * field of a row to set it as deleted!
 *
 * @param PDO $db Database connection
 * @param string $idTextToDelete Id of the selected text to delete
 *
 * @return bool returns if the function has been executed or not.
 */
function deleteSelectedContent (PDO $db, string $idTextToDelete) : bool {
    $query = $db->prepare('UPDATE `about_me_section` SET `deleted` = 1 WHERE `id` = :idTextToDelete;');
    $query->bindParam(':idTextToDelete', $idTextToDelete);
    return $query->execute();
}

?>