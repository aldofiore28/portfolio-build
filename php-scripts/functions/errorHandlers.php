<?php

/**
 * The following function will just check if the query has been executed or not, and generates a
 * p tag with a success or error message.
 *
 * @param bool $result The result of the query.
 *
 * @return string Error message in a string and a p tag.
 */
function resultQueryErrors (bool $result) :string {
    if ($result && is_bool($result)) {
        return $errorMessage = '<p class="confirmation">Operation Successful</p>';
    } else {
        return $errorMessage = '<p class="error">Fatal Error!</p>';
    }
}