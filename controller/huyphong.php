<?php
session_start();
$phongID = $_GET["id"];
$email = $_SESSION['email'];
$datPhongID = $phongID . '-' . $email;
include "../data/connection.php";

if ($email == null) {
    header("Location: /view/dangnhap.php");
    exit();
}

$query = "DELETE FROM DatPhong WHERE IDDatPhong = :datPhongID";

$datPhong = null;
try {
    $stmt = $db->prepare($query);
    $stmt->bindParam(":datPhongID", $datPhongID, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: /view/phong.php?id=" . $phongID);
    exit();
} catch (\Exception $e) {
	echo $e->getMessage();
}