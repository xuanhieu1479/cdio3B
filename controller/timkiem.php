<?php
session_start();
$city = $_GET["City"];
$quantity = $_GET["Quantity"];
$price = $_GET["Price"];
$startDate = $_GET["StartDate"];
$endDate = $_GET["EndDate"];
include "../data/connection.php";

$query = "SELECT DISTINCT Homestay.* FROM Homestay INNER JOIN Phong ON Homestay.IDHomestay = Phong.IDHomestay WHERE Homestay.ThanhPho = :City";
if ($quantity != ">5") $query .= " AND Phong.SoNguoiToiDa = :Quantity";
else $query .= " AND Phong.SoNguoiToiDa > 5";
switch ($price) {
    case "500-1000": 
        $query .= " AND Phong.Gia > 500000 AND Phong.Gia < 1000000";
        break;
    case "1000-2000": 
        $query .= " AND Phong.Gia > 1000000 AND Phong.Gia < 2000000";
        break;
    case "2000-3000": 
        $query .= " AND Phong.Gia > 2000000 AND Phong.Gia < 3000000";
        break;
    case ">3000": 
        $query .= " AND Phong.Gia > 3000000";
        break;    
}

$result = null;
try {
	$stmt = $db->prepare($query);
    $stmt->bindParam(":City", $city, PDO::PARAM_STR);
    $stmt->bindParam(":Quantity", $quantity, PDO::PARAM_STR);
	$stmt->execute();
    $result = $stmt->fetchAll();
} catch (\Exception $e) {
	echo $e->getMessage();
}