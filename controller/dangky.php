<?php
session_start();
include "../function_helper.php";

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$permission = htmlspecialchars($_POST["permission"]);
$hash = password_hash($password, PASSWORD_DEFAULT);
$sdt = '';
$tinhtrang = 'Active';

$query = 'INSERT INTO NguoiDung VALUES (:email, :matkhau, :ten, :sdt, :idchucvu, :tinhtrang)';
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(':matkhau', $hash, PDO::PARAM_STR);
    $stmt->bindParam(':ten', $name, PDO::PARAM_STR);
    $stmt->bindParam(':sdt', $sdt, PDO::PARAM_STR);
    $stmt->bindParam(':idchucvu', $permission, PDO::PARAM_STR);
    $stmt->bindParam(':tinhtrang', $tinhtrang, PDO::PARAM_STR);
    $stmt->execute();
    
    LogIn($email, $name, $sdt, $permission, $tinhtrang);
    header("Location: /index.php");
    exit();
} catch (\Exception $e) {
    $_SESSION['error'] = "Tài khoản này đã có người sử dụng!";
    header("Location: /view/dangky.php");    
    echo $e->getMessage();
    exit();
}