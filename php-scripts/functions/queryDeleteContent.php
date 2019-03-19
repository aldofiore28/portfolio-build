<?php

function deleteSelectedContent (PDO $db, string $idTextToDelete) : bool {
    $query = $db->prepare('UPDATE `about_me_section` SET `deleted` = 1 WHERE `id` = :idTextToDelete;');
    $query->bindParam(':idTextToDelete', $idTextToDelete);
    return $query->execute();
}

?>