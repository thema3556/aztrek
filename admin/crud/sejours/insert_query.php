<?php
require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$titre = $_POST["titre"];
$image = $_POST["image"];
$description = $_POST["description"];
$duree = $_POST["duree"];
$pays_id = $_POST["categorie_id"];

// Upload de l'image
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $image);

// Enregistrement en base de données
insertPays($titre, $image, $description, $duree, $pays_id);

// Redirection vers la liste
header("Location: index.php");