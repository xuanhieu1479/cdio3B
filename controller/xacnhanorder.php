<?php
session_start();
include "../data/connection.php";

$idDatPhong = htmlspecialchars($_POST["id"]);

$query = "UPDATE DatPhong SET TinhTrang = 'Accepted' WHERE IDDatPhong = :id";
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":id", $idDatPhong, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: /view/lietkeorder.php");
    exit();
} catch (\Exception $e) {
    echo $e->getMessage();
}