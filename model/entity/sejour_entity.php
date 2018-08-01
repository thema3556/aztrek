<?php

/**
 * Retourne la liste des sejours
 * @return array Liste des sejours
 */
function getAllSejoursByPays(int $id): array {
    global $connexion;

    $query = "SELECT
                sejour.*
            FROM sejour
            WHERE sejour.pays_id = :id;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getSejour(int $id): array {
    global $connexion;

    $query = "SELECT
                sejour.*,
                pays.nom AS pays
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id
            WHERE sejour.id = :id;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertProjet(string $titre, string $image, string $date_debut, string $date_fin, float $prix, string $description, int $categorie_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO projet (titre, image, date_debut, date_fin, description, prix, categorie_id) VALUES (:titre, :image, :date_debut, :date_fin, :description, :prix, :categorie_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":date_debut", $date_debut);
    $stmt->bindParam(":date_fin", $date_fin);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updateProjet(int $id, string $titre, string $image, string $date_debut, string $date_fin, float $prix, string $description, int $categorie_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE projet
                SET titre = :titre,
                    image = :image,
                    date_debut = :date_debut,
                    date_fin = :date_fin,
                    prix = :prix,
                    description = :description,
                    categorie_id = :categorie_id
                WHERE id = :id
            ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":date_debut", $date_debut);
    $stmt->bindParam(":date_fin", $date_fin);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}