<?php
session_start();
include "../data/connection.php";

$idHomestay = htmlspecialchars($_POST["id"]);
$info = htmlspecialchars($_POST["info"]);
$name = htmlspecialchars($_POST["name"]);
$city = htmlspecialchars($_POST["city"]);
$address = htmlspecialchars($_POST["address"]);

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

$query = 'UPDATE Homestay SET Ten = :ten, ThanhPho = :thanhpho, DiaChi = :diachi, MoTa = :mota';
if ($thumbnail != null) $query .= ', Thumbnail = :thumbnail';
$query .= ' WHERE IDHomestay = :idHomestay';
try {    
    $stmt = $db->prepare($query);
    $stmt->bindParam(":idHomestay", $idHomestay, PDO::PARAM_STR);
    $stmt->bindParam(':ten', $name, PDO::PARAM_STR);
    $stmt->bindParam(':thanhpho', $city, PDO::PARAM_STR);
    $stmt->bindParam(':diachi', $address, PDO::PARAM_STR);
    $stmt->bindParam(':mota', $info, PDO::PARAM_STR);
    if ($thumbnail != null) $stmt->bindParam(':thumbnail', $thumbnail, PDO::PARAM_STR);
    $stmt->execute();
    $_SESSION['update'] = true;
    header("Location: /view/capnhathomestay.php?id=" . $idHomestay);
    exit();
} catch (\Exception $e) {
    echo $e->getMessage();
}