<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();

$montant = $_POST["montant"];
$sejour_id = $_POST["sejour_id"];
$utilisateur_id = $utilisateur["id"];

insertSejour($montant, $sejour_id_id, $utilisateur_id);

header("Location: sejour.php?id=" . $sejour_id_id);

