<?php

function updateSelectedText (PDO $db, string $idOldText, string $newText) : bool {
    $query = $db->prepare('UPDATE `about_me_section` SET `section` = :newText WHERE `id`=:idOldText');
    $query->bindParam(':idOldText',$idOldText);
    $query->bindParam(':newText',$newText);
    return $query->execute();
}

?>