<?php


/**
 * The following function will run a SQL query that will take the id and description from the database
 *
 * @param PDO $db Database connection
 *
 * @return array Returns an indexed array of associative arrays that we will use to populate the
 * dropdowns.
 */
function getItemsFromDB (PDO $db) {
    $query = $db->prepare('SELECT `id`, `section` FROM `about_me_section` WHERE `deleted`=0;');
    $query->execute();
    return $query->fetchAll();
}

/**
 * The following function will concatenate all the information in the array into HTML tags:
 * The id will become the attribute of the option TAG 'value'.
 * The section will become the visual input that you get from the dropdown.
 *
 * @param array $array array retrieved from the database
 *
 * @return string Returns a concatenated string of HTML tags.
 */
function populateDropdownEdit(array $array) :string {
    $result ='';
    foreach ($array as $value) {
        $result .= '<option value="' . $value['id'] . '">' . $value['section'] . '</option>';
    }
    return $result;
}

?>