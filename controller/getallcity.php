<?php
session_start();
include "data/connection.php";

$query = "SELECT thanhpho FROM Homestay";

try {
	$stmt = $db->prepare($query);
	$stmt->execute();
    $result = $stmt->fetchAll();
} catch (\Exception $e) {
	echo $e->getMessage();
}