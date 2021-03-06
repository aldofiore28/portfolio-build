<?php

/**
 * checks if the query has been executed or not, and generates a
 * p tag with a success or error message.
 *
 * @param bool $result The result of the query.
 *
 * @return string Error message is a p tag inside a string.
 */
function resultQueryErrors (bool $result) :string {
    if ($result && is_bool($result)) {
        return '<p class="confirmation">Operation Successful</p>';
    } else {
        return '<p class="error">Operation Failed!</p>';
    }
}


/**
 * checks if a string, after we take the whitespaces from it, has a length of 0.
 * If is that so, it means that is a value that we don't want to have in the db.
 *
 * @param string $testString The text that we want to check
 *
 * @return bool Returns if our checks were true or false
 */
function validateText (string $testString) : bool {
    if (strlen(trim($testString)) <= 0) {
        return false;
    } else {
        return true;
    }
}

/**
 * The following function will remove all the whitespaces from the start and the end of the
 * inputted text, then check
 *
 * @param string $testString The string that we want to change
 *
 * @return string The new string without whitespaces
 */
function sanitizationText (string $testString) : string {
    $testString = trim($testString);
    $testString = filter_var($testString, FILTER_SANITIZE_STRING);
    return $testString;
}