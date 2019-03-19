<?php


/**
 * The following function runs a MySQL query that will select from the database a 'section description'
 * given a certain id.
 *
 * @param PDO $db Database connection.
 * @param string $idSelectedItem Id of the item that we selected in the dropdown.
 *
 * @return string Returns the selected text.
 */
function getSelectedItem (PDO $db, string $idSelectedItem) : string {
    $query = $db->prepare('SELECT `section` FROM `about_me_section` WHERE `id` = :idSelectedItem;');
    $query->bindParam(':idSelectedItem', $idSelectedItem);
    $query->execute();
    $result = $query->fetchAll();
    return $result[0]['section'];
}

?>