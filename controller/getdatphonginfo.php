<?php
session_start();
$phongID = $_GET["id"];
$email = $_SESSION['email'];
include "../data/connection.php";

$query = "SELECT * FROM DatPhong WHERE IDPhong = :id AND EmailNguoiDung = :email";

$datPhong = null;
try {
	$stmt = $db->prepare($query);
    $stmt->bindParam(":id", $phongID, PDO::PARAM_STR);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
	$stmt->execute();
    $datPhong = $stmt->fetchAll();
} catch (\Exception $e) {
	echo $e->getMessage();
}