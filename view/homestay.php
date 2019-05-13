<?php
session_start();
include "../controller/gethomestayinfo.php";
include "../controller/getallphong.php";
?>
<!DOCTYPE html>
<html>
<head lang="vi">
	<title>Tim Kiem</title>
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
		<div class="information">
			<div class="cot1">
				<?php echo '<img src="' . $resultHomestay[0]['thumbnail'] . '" height="450" width="800">'; ?>
				<h2><?php echo $resultHomestay[0]['ten']; ?></h2>
				<p>Mã chỗ ở: <?php echo $resultHomestay[0]['idhomestay']; ?></p>
				<a href="#" style="color: #7c7c7c; margin-top: 10px; text-decoration: none;"><i class="fas fa-map-marker" style="margin-right: 10px"></i><?php echo $resultHomestay[0]['diachi']; ?></a>
				
				<h3 style="color: black">Giới thiệu chỗ ở</h3>
				<div style="font-size: 15px; margin-left: 15px;">
					<p><?php echo $resultHomestay[0]['mota']; ?></p>
				</div>
				
				<a style="text-decoration: none;"><div style="background-image: url('avatar.png');height: 50px;width: 50px;border-radius: 50px; margin-top: 30px"></div>
				<h3 style="color: black">Email liên hệ: <?php echo $resultHomestay[0]['emailnguoidung']; ?></h3></a>

			</div><!---cot1-->
			
			<div class="cot2">
				<p></p>
			</div><!---cot2-->
		</div><!---information-->
		<div class="roberto-rooms-area section-padding-100-0">
		<h3 style="color: black; margin-left: 150px; margin-top: 50px">Danh sách phòng</h3></a>
		<div class="container" style="margin-top: 50px">		
            <?php
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
                    echo '</div>';
                    echo '<a href="/view/phong.php?id=' . $phong['idphong'] . '" class="btn view-detail-btn">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>';
                    echo '</div></div></div></div>';
                }
            ?>
        </div>
    </div>
		<?php include "footer.html" ?>
	</div>
</body>
</html>