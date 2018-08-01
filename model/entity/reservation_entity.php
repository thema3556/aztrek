<?php

function getAllDepartBySejour(int $id): array {
    global $connexion;

    $query = "SELECT
                utilisateur.nom,
                utilisateur.prenom,
                utilisateur.photo,
                sejour.date_depart,
                reservation.montant,
                reservation.utilisateur_id
            FROM reservation
            INNER JOIN utilisateur
                    ON utilisateur.id = reservation.utilisateur_id
            WHERE reservation.sejour_id = :id
            ORDER BY sejour.date_depart DESC;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}


function insertReservation(float $nb_places, int $depart_id, int $utilisateur_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO reservation (nb_places, date_depart, utilisateur_id) VALUES (:nb_places, NOW(), :depart_id, :utilisateur_id);";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nb_places", $nb_places);
    $stmt->bindParam(":depart_id", $depart_id);
    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}
