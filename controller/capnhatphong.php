<?php
session_start();
include "../data/connection.php";

$idPhong = htmlspecialchars($_POST["id"]);
$info = htmlspecialchars($_POST["info"]);
$price = (int)htmlspecialchars($_POST["price"]);
$capacity = (int)htmlspecialchars($_POST["capacity"]);
$discount = (int)htmlspecialchars($_POST["discount"]);

$thumbnail = $_FILES["thumbnail"];
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

$query = 'UPDATE Phong SET SoNguoiToiDa = :capacity, Gia = :price, ThongTin = :info, GiamGia = :discount';
if ($thumbnail != null) $query .= ', Thumbnail = :thumbnail';
$query .= ' WHERE IDPhong = :idPhong';
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":idPhong", $idPhong, PDO::PARAM_STR);
    $stmt->bindParam(':capacity', $capacity, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_STR);
    $stmt->bindParam(':info', $info, PDO::PARAM_STR);
    $stmt->bindParam(':discount', $discount, PDO::PARAM_STR);
    if ($thumbnail != null) $stmt->bindParam(':thumbnail', $thumbnail, PDO::PARAM_STR);
    $stmt->execute();
    $_SESSION['update'] = true;
    header("Location: /view/capnhatphong.php?id=" . $idPhong);
    exit();
} catch (\Exception $e) {
    echo $e->getMessage();
}