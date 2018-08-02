<?php

function insertPays(string $nom, string $photo): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO pays (nom, photo) VALUES (:nom, :photo)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":photo", $photo);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updatePays(int $id, string $nom, string $photo) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE pays SET nom = :nom, photo = :photo WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":photo", $photo);
    $stmt->execute();
}


