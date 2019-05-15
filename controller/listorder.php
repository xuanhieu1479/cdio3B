<?php
session_start();
$email = $_SESSION['email'];
include "../data/connection.php";

$query = "SELECT DatPhong.IDDatPhong, DatPhong.EmailNguoiDung, 
            NguoiDung.Ten AS TenKH, NguoiDung.SDT, 
            Homestay.Ten AS TenHomestay, Homestay.DiaChi, Homestay.ThanhPho, 
            Phong.SoNguoiToiDa, Phong.Thumbnail FROM DatPhong
            INNER JOIN NguoiDung ON DatPhong.EmailNguoiDung = NguoiDung.Email
            INNER JOIN Phong ON DatPhong.IDPhong = Phong.IDPhong
            INNER JOIN Homestay ON Phong.IDHomestay = Homestay.IDHomestay
            WHERE Homestay.EmailNguoiDung = :email AND DatPhong.TinhTrang = 'Pending'";

$result = null;
try {
	$stmt = $db->prepare($query);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
	$stmt->execute();
    $result = $stmt->fetchAll();
} catch (\Exception $e) {
	echo $e->getMessage();
}