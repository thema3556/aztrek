<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$nom = $_POST["nom"];

// Upload de l'image
if ($_FILES["photo"]["error"] == UPLOAD_ERR_NO_FILE) {
    $pays = getOneEntity("pays", $id);
    $photo = $pays["photo"];
} else {
    $photo = $_FILES["photo"]["name"];
    $tmp = $_FILES["photo"]["tmp_name"];

    move_uploaded_file($tmp, "../../../uploads/" . $photo);
}

updatePays($id, $nom, $photo);

header("Location: index.php");
