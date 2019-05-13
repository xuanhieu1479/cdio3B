<?php
session_start();
$phongID = $_GET["id"];
include "../data/connection.php";

$query = "SELECT * FROM Phong WHERE IDPhong = :id";

$resultPhong = null;
try {
	$stmt = $db->prepare($query);
    $stmt->bindParam(":id", $phongID, PDO::PARAM_STR);
	$stmt->execute();
    $resultPhong = $stmt->fetchAll();
} catch (\Exception $e) {
	echo $e->getMessage();
}