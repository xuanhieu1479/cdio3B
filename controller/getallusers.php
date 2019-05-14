<?php
session_start();
$email = $_SESSION['email'];
include "../data/connection.php";

$query = "SELECT NguoiDung.Email, NguoiDung.Ten, NguoiDung.TinhTrang, ChucVu.TenChucVu FROM NguoiDung
            INNER JOIN ChucVu ON NguoiDung.IDChucVu = ChucVu.IDChucVu
            WHERE NguoiDung.IDChucvu <> 1";

$result = null;
try {
	$stmt = $db->prepare($query);
	$stmt->execute();
    $result = $stmt->fetchAll();
} catch (\Exception $e) {
	echo $e->getMessage();
}