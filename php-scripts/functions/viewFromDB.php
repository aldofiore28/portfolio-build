<?php

/**
 * This function will run a query that will take all the about me text section with a
 * deleted value of 0 (means that they are not deleted).
 *
 * @param PDO $db Database connection
 *
 * @return array Returns an associative array with the key as the name of the field and
 * the value as the text that we are going to print in the section.
 */
function getAboutMeContent (PDO $db) : array {
    $query = $db->prepare('SELECT `section` FROM `about_me_section` WHERE `deleted` = 0;');
    $query->execute();
    return $query->fetchAll();
}

/**
 * This function will run a loop on an array to concatenate all the information into
 * a string.
 *
 * @param array $content The array with all the information needed
 *
 * @return string Returns a string that contains a p tag and the text retrieved from the
 * array given.
 */
function viewAboutContent (array $content) : string {
    $result = '';
    foreach ($content as $value) {
        if (!strlen(trim($value['section'])) <= 0) {
            $result .= '<p>' . $value['section'] . '</p>';
        } else {
            continue;
        }
    }
    return $result;
}