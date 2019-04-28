<?php
session_start();
$email = $_SESSION["email"];
$newPassword = $_POST["newPassword"];
$currentPassword = $_POST["currentPassword"];
$hash = password_hash($newPassword, PASSWORD_DEFAULT);
include "../data/connection.php";

try {
	$query = 'SELECT * FROM NguoiDung WHERE Email = :email';
	$stmt = $db->prepare($query);
	$stmt->bindParam(":email", $email, PDO::PARAM_STR);
	$stmt->execute();
	$result = $stmt->fetchAll();
} catch (\Exception $e) {
	echo $e->getMessage();
}

if (!password_verify($currentPassword, $result[0]['matkhau'])) {
    $_SESSION['error'] = "Mật khẩu hiện tại không trùng khớp";
    header("Location: /view/doimatkhau.php");
    exit();
}

try {
	$ketqua =$db->prepare("UPDATE NguoiDung SET matkhau = :password WHERE email = :email");
	$ketqua->bindParam(":email", $email, PDO::PARAM_STR);
	$ketqua->bindParam(":password", $hash, PDO::PARAM_STR);
	$ketqua->execute();
} catch(\Exception $e) {
	echo $e->getMessage();
}

$_SESSION['update'] = true;
header('location: ../view/doimatkhau.php');
exit();