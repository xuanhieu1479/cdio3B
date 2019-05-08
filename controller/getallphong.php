<?php
session_start();
$homestayID = $_GET["id"];
include "../data/connection.php";

$query = "SELECT * FROM Phong WHERE IDHomestay = :id";

$result = null;
try {
	$stmt = $db->prepare($query);
    $stmt->bindParam(":id", $homestayID, PDO::PARAM_STR);
	$stmt->execute();
    $result = $stmt->fetchAll();
} catch (\Exception $e) {
	echo $e->getMessage();
}