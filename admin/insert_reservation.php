<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();

$nb_places = $_POST["nb_places"];
$depart_id = $_POST["depart_id"];
$reservation_id = $reservation_id["id"];

insertReservation($nb_places, $depart_id, $utilisateur_id);

header("Location: reservation.php?id=" . $reservation_id);


