<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();

$montant = $_POST["montant"];
$date_achat_id = $_POST["date_achat_id"];
$utilisateur_id = $utilisateur["id"];

insertReservation($montant, $reservation_id, $utilisateur_id);

header("Location: reservation.php?id=" . $reservation_id);

