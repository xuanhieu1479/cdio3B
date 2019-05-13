<?php
session_start();
include "../data/connection.php";

$idPhong = htmlspecialchars($_POST["id"]);
$idHomestay = htmlspecialchars($_POST["idHomestay"]);

$query = 'DELETE FROM Phong WHERE IDPhong = :idPhong';
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":idPhong", $idPhong, PDO::PARAM_STR);
    $stmt->execute();
    $_SESSION['update'] = true;
    header("Location: /view/homestay.php?id=" . $idHomestay);
    exit();
} catch (\Exception $e) {
    echo $e->getMessage();
}