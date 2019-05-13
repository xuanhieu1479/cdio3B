<?php
session_start();
include "../controller/getphonginfo.php";
include "../controller/getdatphonginfo.php";
?>
<!DOCTYPE html>
<html>
<head lang="vi">
	<title>Thong Tin Chi Tiet Phong</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/ThongTinChiTietPhongCSS/thongtinphong.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container" style="margin-top: 200px" >
		<div class="picture"><img src="<?php echo $resultPhong[0]['thumbnail'] ?>"></div>
		<div class="information">
			<?php if ($resultPhong[0]['giamgia'] != 0) {
				echo '<p style="margin-top: 10px;margin-bottom: 10px"><button style="border-radius: 5px; background:#d63031; height: 23px; margin-left: 50px; color: #eeee">';
				echo '-' . $resultPhong[0]['giamgia']. '%';
				echo '</button></p>';
			}?>
			<div style="margin-top: 7px">
				<ul>
					<li><i class="fas fa-user-tag" id="icon" style="margin-left:25px;color: #eb2f06"></i><a style="margin-left: 15px">
					<?php 
						switch($resultPhong[0]['songuoitoida']) {
							case 1 : 
								echo 'Phòng đơn';
								break;
							case 2 : 
								echo 'Phòng đôi';
								break;
							default : 
								echo 'Phòng ' . $resultPhong[0]['songuoitoida'] . ' người';
								break;
						}
					?>
					</a></li>
					<li><i class="fas fa-dollar-sign" id="icon" style="margin-left:30px;color: #eb2f06"></i><a style="margin-left: 25px"><?php echo $resultPhong[0]['gia'] ?></a></li>
				</ul>
			</div>
			<p style="margin-top: 15px;"><?php echo $resultPhong[0]['thongtin'] ?></p>
			<a>Phương thức đặt phòng: Thẻ tín dụng</a><i class="fab fa-cc-visa" style="margin: 0  3px 0 3px ; font-size: 18px;color: #eb2f06"></i><a>& Paypal </a> <i class="fab fa-cc-paypal" style=" font-size: 18px;color: #eb2f06"></i>
				<?php
				if ($_SESSION['idchucvu'] != 2) {
					echo '<div class="dat-huy-phong" style="margin-left: 80px; margin-top: 20px">';
					echo '<button class="button">';
					if ($datPhong == null) {
						echo '<a href="/controller/datphong.php?id=' . $resultPhong[0]['idphong'] . '">Đặt phòng</a>';
					}
					else {
						echo '<a href="/controller/huyphong.php?id=' . $resultPhong[0]['idphong'] . '">Hủy phòng</a>';
					}
					echo '</button></div>';
				}?>			
		</div>
		
		<div class="clear"></div>
	</div>
</body>
</html>