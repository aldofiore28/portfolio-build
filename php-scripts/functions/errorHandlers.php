<?php

function resultQueryErrors (bool $result) {
    if ($result) {
        return $errorMessage = '<p class="confirmation">Operation Successful</p>';
    } else {
        return $errorMessage = '<p class="error">Fatal Error!</p>';
    }
}