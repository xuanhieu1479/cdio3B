<?php

$matkhau=$_POST["password"];
$email=$_POST["email"];

include "doimatkhau.php";
try {
	$ketqua =$db->prepare("UPDATE NguoiDung SET matkhau=:password where email=:email");
$ketqua->bindParam(":email", $email, PDO::PARAM_STR);
$ketqua->bindParam(":password", $matkhau, PDO::PARAM_STR);
$ketqua->execute();
} catch(\Exception $e) {
	echo $e->getMessage();
}

$ketqua =$db->prepare("select * from NguoiDung");

$ketqua->execute();
$dulieu = $ketqua->fetchAll();
foreach ($dulieu as $dong){
	echo $dong['email'] . ' - ' . $dong['matkhau'] . '</br>';
}