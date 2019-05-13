<?php
session_start();
include "../data/connection.php";

$idHomestay = htmlspecialchars($_POST["id"]);

$query = 'DELETE FROM Phong WHERE IDHomestay = :idHomestay';
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":idHomestay", $idHomestay, PDO::PARAM_STR);
    $stmt->execute();
} catch (\Exception $e) {
    echo $e->getMessage();
}

$query = 'DELETE FROM Homestay WHERE IDHomestay = :idHomestay';
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":idHomestay", $idHomestay, PDO::PARAM_STR);
    $stmt->execute();    
} catch (\Exception $e) {
    echo $e->getMessage();
}

$_SESSION['update'] = true;
header("Location: /view/quanlyhomestay.php");
exit();