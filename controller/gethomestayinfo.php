<?php
session_start();
$homestayID = $_GET["id"];
include "../data/connection.php";

$query = "SELECT * FROM Homestay WHERE IDHomestay = :id";

$resultHomestay = null;
try {
	$stmt = $db->prepare($query);
    $stmt->bindParam(":id", $homestayID, PDO::PARAM_STR);
	$stmt->execute();
    $resultHomestay = $stmt->fetchAll();
} catch (\Exception $e) {
	echo $e->getMessage();
}