<?php

function getSelectedItem (PDO $db, string $idSelectedItem) : array {
    $query = $db->prepare('SELECT `section` FROM `about_me_section` WHERE `id` = :idSelectedItem;');
    $query->bindParam(':idSelectedItem', $idSelectedItem);
    $query->execute();
    return $query->fetchAll();
}

function generateStringSelectedValue (array $selectedItem) : string {
    $result = '';
    foreach ($selectedItem as $value) {
        $result .= $value['section'];
    }
    return $result;
}

?>