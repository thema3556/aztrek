<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();

$fichier = $_POST["fichier"];
$alt = $_POST["alt"];
$sejour_id = $_POST["sejour_id"];
$utilisateur_id = $utilisateur["id"];

insertPhoto($fichier, $alt, $sejour_id, $utilisateur_id);

header("Location: photo.php?id=" . $photo_id);
