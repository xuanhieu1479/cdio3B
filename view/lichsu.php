<?php
session_start();
include "../controller/getorderhistory.php";
?>
<!DOCTYPE html>
<html>
<head lang="vi">
	<title>Lich Su Dat Phong</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/ThongTinHomestayCSS/thongtinhomestay.css">
	<link rel="stylesheet" href="../css/TrangChuCSS/style.css">
	<link rel="stylesheet" href="../css/TimKiemCSS/timkiem.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tourist a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>

	<script type="text/javascript" src="../js/ThongTinCaNhanJS/jquery-3.3.1.min.js"></script>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-css -->
	
</head>
<body style="margin: 0px;padding: 0px;">
	<div class="contain" style=" width: 100%">
	<?php include "header.php" ?>
		<div class="container" style="margin-top: 50px">		
            <?php
                if ($result == null) {
                    echo '<div style="text-align: center; margin-bottom: 30px; margin-top: 30px; color: red">';
                    echo '<h2>Bạn chưa đặt phòng nào cả</h2>';
                    echo '</div>';
                }
                else {
                    foreach($result as $phong) {
                        echo '<div class="row">';
                        echo '<div class="col-12 col-lg-8">';
                        echo '<div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">';
                        echo '<div class="room-thumbnail">';
                        echo '<img src="' . $phong['thumbnail'] . '">';
                        echo '</div>';
                        echo '<div class="room-content">';
                        switch($phong['songuoitoida']) {
                            case 1 : 
                                echo '<h2>Phòng đơn</h2>';
                                break;
                            case 2 : 
                                echo '<h2>Phòng đôi</h2>';
                                break;
                            default : 
                                echo '<h2>Phòng ' . $phong['songuoitoida'] . ' người</h2>';
                                break;
                        }
                        echo '<h4>' . $phong['gia'] . ' VND<span> / Ngày</span></h4>';
                        echo '<div class="room-feature">';
                        echo '<h6>Thông tin : <span>' . $phong['thongtin'] . '</span></h6>';
                        switch ($phong['tinhtrangorder']) {
                            case 'Pending' :
                                echo '<h6>Tình trạng : <span><p style="color:orange">' . $phong['tinhtrangorder'] . '</p></span></h6>';
                                break;
                            case 'Accepted' :
                                echo '<h6>Tình trạng : <span><p style="color:green">' . $phong['tinhtrangorder'] . '</p></span></h6>';
                                break;
                            case 'Denied' :
                                echo '<h6>Tình trạng : <span><p style="color:red">' . $phong['tinhtrangorder'] . '</p></span></h6>';
                                break;
                        }                  
                        echo '</div>';
                        echo '<a href="/view/phong.php?id=' . $phong['idphong'] . '" class="btn view-detail-btn">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>';
                        echo '</div></div></div></div>';
                    }
                }
            ?>
        </div>
    </div>
	<?php include "footer.html" ?>
</body>
</html>