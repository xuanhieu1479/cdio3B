<?php

session_start();
$ten=$_POST["fullname"];
$email = $_SESSION["email"];
$phone = $_POST["phone"];
include "../data/connection.php";

try {
	$ketqua = $db->prepare("UPDATE NguoiDung SET ten = :ten, sdt = :phone WHERE email = :email");
  $ketqua->bindParam(":email", $email, PDO::PARAM_STR);
  $ketqua->bindParam(":ten", $ten, PDO::PARAM_STR);
  $ketqua->bindParam(":phone", $phone, PDO::PARAM_STR);
  $ketqua->execute();
} catch(\Exception $e) {
	echo $e->getMessage();
}

$ketqua = $db->prepare("SELECT * FROM NguoiDung WHERE email = :email");
$ketqua->bindParam(":email", $email, PDO::PARAM_STR);
$ketqua->execute();
$dulieu = $ketqua->fetchAll();

foreach ($dulieu as $dong){
  $_SESSION['ten'] = $dong['ten'];
  $_SESSION['sdt'] = $dong['sdt'];
}

$_SESSION['update'] = true;
header('location: ../view/thongtincanhan.php');
exit();