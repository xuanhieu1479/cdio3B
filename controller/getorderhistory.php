<?php
session_start();
$email = $_SESSION['email'];
include "../data/connection.php";

$query = "SELECT Phong.*, DatPhong.TinhTrang AS TinhTrangOrder FROM Phong 
    INNER JOIN DatPhong ON Phong.IDPhong = DatPhong.IDPhong 
    WHERE Phong.IDPhong IN (SELECT IDPhong FROM DatPhong WHERE EmailNguoiDung = :email)";

$result = null;
try {
	$stmt = $db->prepare($query);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
	$stmt->execute();
    $result = $stmt->fetchAll();
} catch (\Exception $e) {
	echo $e->getMessage();
}