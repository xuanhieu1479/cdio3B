<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "../controller/timkiem.php";
?>
<head>
    <meta charset="UTF-8">
    <title>Quản lý Homestay</title>
    <link rel="stylesheet" href="../css/TrangChuCSS/style.css">
	<link rel="stylesheet" href="../css/TimKiemCSS/timkiem.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Tourist a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="text/javascript" src="../js/ThongTinCaNhanJS/jquery-3.3.1.min.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-css -->
	
</head>
<body >
	<body style="margin: 0px;padding: 0px;">
    <?php include "header.php" ?>
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container" style="margin-top: 50px">
            <?php
                if ($result == null) {
                    echo '<div style="text-align: center; margin-bottom: 30px; margin-top: 30px; color: red">';
                    echo '<h2>Không tồn tại Homestay cần tìm. Xin mời thử lại</h2>';
                    echo '</div>';
                }
                else {
                    foreach($result as $homestay) {
                        echo '<div class="row">';
                        echo '<div class="col-12 col-lg-8">';
                        echo '<div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">';
                        echo '<div class="room-thumbnail">';
                        echo '<img src="' . $homestay['thumbnail'] . '">';
                        echo '</div>';
                        echo '<div class="room-content">';
                        echo '<h2>' . $homestay['ten'] . '</h2>';
                        echo '<div class="room-feature">';
                        echo '<h6>Thành phố : <span>' . $homestay['thanhpho'] . '</span></h6>';
                        echo '<h6>Địa chỉ : <span>' . $homestay['diachi'] . '</span></h6>';
                        echo '</div>';
                        echo '<a href="/view/homestay.php?id=' . $homestay['idhomestay'] . '" class="btn view-detail-btn">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>';
                        echo '</div></div></div></div>';
                    }
                }
            ?>
        </div>
    </div>
    <?php include "footer.html" ?>
</body>
</html>