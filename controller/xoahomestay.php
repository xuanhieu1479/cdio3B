<?php
session_start();
include "../data/connection.php";

$idHomestay = $info = htmlspecialchars($_POST["id"]);

$query = 'DELETE FROM Homestay WHERE IDHomestay = :idHomestay';
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":idHomestay", $idHomestay, PDO::PARAM_STR);
    $stmt->execute();
    $_SESSION['update'] = true;
    header("Location: /view/quanlyhomestay.php");
    exit();
} catch (\Exception $e) {
    echo $e->getMessage();
}