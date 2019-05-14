<?php
session_start();
include "../data/connection.php";

$email = htmlspecialchars($_POST["email"]);

$query = "UPDATE NguoiDung SET TinhTrang = 'Active' WHERE Email = :email";
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: /view/quanlytaikhoan.php");
    exit();
} catch (\Exception $e) {
    echo $e->getMessage();
}