<?php

function getItemsFromDB (PDO $db) : array {
    $query = $db->prepare('SELECT `id`, `section` FROM `about_me_section` WHERE `deleted` = 0;');
    $query->execute();
    return $query->fetchAll();
}

function populateDropdownEdit (array $array) : string {
    $result = '';
    foreach ($array as $value) {
        $result .= '<option value="' . $value['id'] . '">' . $value['section'] .'</option>';
    }
    return $result;
}