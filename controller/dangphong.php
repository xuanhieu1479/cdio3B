<?php
session_start();
include "../data/connection.php";

$info = htmlspecialchars($_POST["info"]);
$price = (int)htmlspecialchars($_POST["price"]);
$quantity = (int)htmlspecialchars($_POST["quantity"]);
$capacity = (int)htmlspecialchars($_POST["capacity"]);
$discount = (int)htmlspecialchars($_POST["discount"]);
$thumbnail = $_FILES["thumbnail"];
$idHomestay = htmlspecialchars($_POST["id"]);

if ($price == null) $price = 100000;
if ($quantity == null) $quantity = 1;
if ($capacity == null) $capacity = 1;
if ($discount == null) $discount = 0;

if ($thumbnail != null) {
    $path = $thumbnail["tmp_name"];
    $image = file_get_contents($path);
    $image_base64 = base64_encode($image);
    $url = 'https://api.imgur.com/3/upload';
    $postdata = http_build_query(
        array(
            'image' => $image_base64
        )
    );
    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Authorization: Client-ID 64397ae15b99aa8',
            'content' => $postdata
        )
    );
    $context  = stream_context_create($opts);
    $response = file_get_contents($url, false, $context);
    $responseObj = json_decode($response);
    $thumbnail = $responseObj->data->link;
}

$query = 'INSERT INTO Phong VALUES (:idPhong, :idHomestay, :soNguoiToiDa, :gia, :thongTin, :thumbnail, :giamGia, \'Active\')';
for ($i = 0; $i < $quantity; $i++) {
    try {
        $idPhong = $idHomestay . '-' . time();
        $stmt = $db->prepare($query);
        $stmt->bindParam(":idPhong", $idPhong, PDO::PARAM_STR);
        $stmt->bindParam(":idHomestay", $idHomestay, PDO::PARAM_STR);
        $stmt->bindParam(':soNguoiToiDa', $capacity, PDO::PARAM_INT);
        $stmt->bindParam(':gia', $price, PDO::PARAM_INT);
        $stmt->bindParam(':thongTin', $info, PDO::PARAM_STR);
        $stmt->bindParam(':giamGia', $discount, PDO::PARAM_INT);
        if ($thumbnail != null) $stmt->bindParam(':thumbnail', $thumbnail, PDO::PARAM_STR);
        else $stmt->bindValue(':thumbnail', 'https://pix10.agoda.net/hotelImages/293/293985/293985_16111711020048807697.jpg?s=1024x768', PDO::PARAM_STR);
        $stmt->execute();    
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
$_SESSION['update'] = true;
header("Location: /view/dangphong.php?id=" . $idHomestay);
exit();