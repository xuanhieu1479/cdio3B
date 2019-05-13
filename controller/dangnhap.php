<?php
session_start();
include "../function_helper.php";

$email = htmlspecialchars($_POST["Email"]);
$password = htmlspecialchars($_POST["Password"]);

$query = 'SELECT * FROM NguoiDung WHERE Email = :email';
$stmt = $db->prepare($query);
$stmt->bindParam(":email", $email, PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetchAll();

if ($stmt->rowCount() == 0) {
    $_SESSION['error'] = "Tài khoản không tồn tại";
    header("Location: /view/dangnhap.php");
    exit();
}

if (!password_verify($password, $result[0]['matkhau'])) {
    $_SESSION['error'] = "Sai mật khẩu";
    header("Location: /view/dangnhap.php");
    exit();
}

LogIn($email, $result[0]['ten'], $result[0]['sdt'], $result[0]['idchucvu'], $result[0]['tinhtrang']);
header("Location: /index.php");
exit();