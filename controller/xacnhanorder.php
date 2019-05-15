<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include "../vendor/autoload.php";
include "../data/connection.php";

$idDatPhong = htmlspecialchars($_POST["id"]);
$email = htmlspecialchars($_POST["email"]);
$thanhpho = htmlspecialchars($_POST["thanhpho"]);
$diachi = htmlspecialchars($_POST["diachi"]);

$query = "UPDATE DatPhong SET TinhTrang = 'Accepted' WHERE IDDatPhong = :id";
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":id", $idDatPhong, PDO::PARAM_STR);
    $stmt->execute();
} catch (\Exception $e) {
    echo $e->getMessage();
}

$mail = new PHPMailer(true);
try {
    // $mail->SMTPDebug = 2;                                       // Enable verbose debug output
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
    $mail->Subject = 'Xác nhận phòng còn trống';
    $mail->Body    = 'Phòng của quý khách tại <b>' . $diachi . ', thành phố ' . $thanhpho . '</b> đã được chủ Homestay xác nhận còn trống. Chúc quý khách có một kì nghỉ vui vẻ';
    $mail->AltBody = 'Phòng của quý khách tại ' . $diachi . ', thành phố ' . $thanhpho . ' đã được chủ Homestay xác nhận còn trống. Chúc quý khách có một kì nghỉ vui vẻ';

    $mail->CharSet = 'UTF-8';
    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header("Location: /view/lietkeorder.php");
exit();