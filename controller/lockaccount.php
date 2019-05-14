<?php
session_start();
include "../data/connection.php";

$email = htmlspecialchars($_POST["email"]);

$query = "UPDATE NguoiDung SET TinhTrang = 'Locked' WHERE Email = :email";
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    mail('quandoanzombie2@gmail.com',
            'Tài khoản trang web "Tìm Kiếm Homestay" của bạn đã bị khóa',
            'Tài khoản của bạn tại trang web "Tìm kiếm Homestay" đã bị khóa vì làm mếch lòng Admin, xin hãy chuẩn bị tiền chuộc đầy đủ để mở khóa.');
    // header("Location: /view/quanlytaikhoan.php");
    // exit();
} catch (\Exception $e) {
    echo $e->getMessage();
}