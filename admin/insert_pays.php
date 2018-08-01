<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();

$nom = $_POST["nom"];
$pays_id = $_POST["pays_id"];
$photo_id = $photo_id["id"];

insertPays($nom, $pays_id, $photo_id);

header("Location: pays.php?id=" . $pays_id);

