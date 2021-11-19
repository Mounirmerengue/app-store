<?php

/**
 * Retourne une instance de \PDO, représantant la connexion à la base de données
 * @return \PDO un objet instance de PDO, connécté à la base de données 
 */

function connexion(){
        return new \PDO(
            "mysql:dbname=store;host=localhost:3306",
            "root",
            "",
            [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
            ]
        );
}   

/**
 * Retournbe tous les produit de la base de données
 * 
 * @return array|false un tableau contenat les produits sous forme de tableau
 * Renvoie un ableau contenant les produits sous forme de tableau,
 * un tableau vide si aucun produit n'est présent en base FALSE si la requête à échouée
 */

function findAll(){
    $db = connexion();
    $sql = "SELECT * FROM product";
    $stmt = $db->query($sql);
    return $stmt->fetchAll();
}


function findOneByID($id){
    $db = connexion();
    $sql = "SELECT * FROM product WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch();
}

/**
 * insére un produit en base de données
 * @param string    $name   nom du produit
 * @param float|int $price  prix du produit
 * @param string    $descr  description du produit
 * @return bool     TRUE    si ajout en base de sonnées réussi, FALSE sinon
 */
function insertProduct($name, $descr, $price, $image){
    $db = connexion();
    $sql = "INSERT INTO product (name, description, price, image) VALUES ( :name, :descr, :price, :image)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":descr", $descr);
    $stmt->bindParam(":price", $price);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
    return $db->lastInsertId();
}






