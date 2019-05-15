<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include "../vendor/autoload.php";
include "../data/connection.php";

$email = htmlspecialchars($_POST["email"]);

$query = "UPDATE NguoiDung SET TinhTrang = 'Locked' WHERE Email = :email";
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();    
} catch (\Exception $e) {
    echo $e->getMessage();
}

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'xuanhieu1479@gmail.com';               // SMTP username
    $mail->Password   = 'gmail18TheBlurryShadow';               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    $mail->setFrom('xuanhieu1479@gmail.com', 'Admin Homestay');
    $mail->addAddress($email);

    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'Tài khoản Homestay của bạn đã bị khóa';
    $mail->Body    = 'Tài khoản <a href="https://cdio3b.herokuapp.com">Homestay</a> của bạn đã bị khóa. Xin vui lòng liên hệ <b>Admin</br> để khôi phục lại.';
    $mail->AltBody = 'Tài khoản Homestay của bạn đã bị khóa. Xin vui lòng liên hệ Admin để khôi phục lại.';

    $mail->CharSet = 'UTF-8';
    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// header("Location: /view/quanlytaikhoan.php");
// exit();