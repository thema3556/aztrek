<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();

$date_depart = $_POST["date_depart"];
$prix = $_POST["prix_id"];
$depart_id = $POST["id"];
$place_totale = $place_totale["id"]

insertDepart($date_depart, $prix, $depart_id, $place_totale);

header("Location: depart.php?id=" . $depart_id);

