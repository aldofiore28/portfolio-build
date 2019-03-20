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
function getSelectedItem (PDO $db, string $idSelectedItem) : array {
    $query = $db->prepare('SELECT `section` FROM `about_me_section` WHERE `id` = :idSelectedItem;');
    $query->bindParam(':idSelectedItem', $idSelectedItem);
    $query->execute();
    return $query->fetch();
}


/**
 * The following function will take the text from the selected items retrieved from the
 * db, assign it to a variable and return a string
 *
 * @param array $array Array with data to edit retrieved from the db
 *
 * @return string Returns a string with the chosen text
 */
function printSelectedItem (array $array) :string {
    $result = $array['section'];
    return $result;
}


/**
 * The Following function will check if the id of the selected item exists. If it does, it will generate
 * an hidden input tag that will pass it to the new post request
 *
 * @param string $id The id of the text to change
 *
 * @return string Returns a string with the input tag and his attributes
 */
function generateHiddenInputWithId (string $id) :string {
    if (isset($id) && is_numeric($id)) {
        return $hiddenInput = '<input type="hidden" value="' . $id . '" name="editId">';
    } else {
        return $hiddenInput = '<input type="hidden" value="0" name="editId">';
    }
}
?>