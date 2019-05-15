<?php
session_start();
$phongID = $_GET["id"];
$email = $_SESSION['email'];
$datPhongID = $email . '-' . time();
include "../data/connection.php";

if ($email == null) {
    header("Location: /view/dangnhap.php");
    exit();
}

$query = "INSERT INTO DatPhong (IDDatPhong, EmailNguoiDung, IDPhong, TinhTrang) VALUES (:datPhongID, :email, :phongID, 'Pending')";

$datPhong = null;
try {
    $stmt = $db->prepare($query);
    $stmt->bindParam(":datPhongID", $datPhongID, PDO::PARAM_STR);
    $stmt->bindParam(":phongID", $phongID, PDO::PARAM_STR);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: /view/phong.php?id=" . $phongID);
    exit();
} catch (\Exception $e) {
	echo $e->getMessage();
}