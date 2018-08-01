<?php

function getAllDepartsBySejour(int $id) {
    global $connexion;

    $query = "SELECT
                depart.*,
                depart.place_totale - IFNULL(SUM(IF(reservation.valide, reservation.nb_places, 0)), 0) AS place_restante
            FROM depart
            LEFT JOIN reservation ON reservation.depart_id = depart.id
            WHERE depart.sejour_id = :id
            GROUP BY depart.id
            ORDER BY depart.date_depart DESC;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
