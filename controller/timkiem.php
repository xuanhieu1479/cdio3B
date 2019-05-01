<?php
session_start();
$city = $_GET["City"];
$quantity = $_GET["Quantity"];
$price = $_GET["Price"];
$startDate = $_GET["StartDate"];
$endDate = $_GET["EndDate"];
include "../data/connection.php";

$query = "SELECT DISTINCT Homestay.* FROM Homestay INNER JOIN Phong ON Homestay.IDHomestay = Phong.IDHomestay WHERE ThanhPho = :City AND SoNguoiToiDa = :Quantity";
switch ($price) {
    case "500-1000": 
        $query .= " AND Gia > 500000 AND Gia < 1000000";
        break;
    case "1000-2000": 
        $query .= " AND Gia > 1000000 AND Gia < 2000000";
        break;
    case "2000-3000": 
        $query .= " AND Gia > 2000000 AND Gia < 3000000";
        break;
    case "3000": 
        $query .= " AND Gia > 300000";
        break;    
}

try {
	$stmt = $db->prepare($query);
    $stmt->bindParam(":City", $city, PDO::PARAM_STR);
    $stmt->bindParam(":Quantity", $quantity, PDO::PARAM_STR);
	$stmt->execute();
    $result = $stmt->fetchAll();
} catch (\Exception $e) {
	echo $e->getMessage();
}