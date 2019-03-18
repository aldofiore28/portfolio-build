<?php

function getAboutMeContent (PDO $db) : array {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare('SELECT `section` FROM `about_me_section` WHERE `deleted` = 0;');

    $query->execute();

    return $query->fetchAll();
}

function viewContent (array $content) : string {
    $result = '';
    foreach ($content as $value) {
        $result .= '<p>' . $value['section'] . '</p>';
    }
    return $result;
}