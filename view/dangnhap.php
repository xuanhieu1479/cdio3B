<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Website tìm kiếm  homestay</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){
 window.scrollTo(0,1); 
	} 
 </script>
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/DangNhapCSS/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 


<!--link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
-->
</head>
<body>
	<div class="header-w3l">
		<h1>Hello and Welcome</h1>
	</div>
	<div class="main-w3layouts-agileinfo">
		<div class="wthree-form">
			<h2>Đăng nhập thông tin </h2>
			<form action="../controller/dangnhap.php" method="post">
				<div style="text-align: center; margin-bottom: 20px; color: red" <?php if(!isset($_SESSION['error'])) echo ' hidden'; ?>>
					<?php
					echo $_SESSION['error'];
					$_SESSION['error'] = null;
					?>
				</div>
				<div class="form-sub-w3">
					<input type="email" name="Email" placeholder="Email" required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="Password" placeholder="Mật khẩu" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<label class="anim">
				<input type="checkbox" class="checkbox">
					<span>Nhớ mất khẩu</span> 
					<a href="#">Quên mật khẩu</a>
				<label > 
				<div class="clear"></div>
				<div class="submit-agileits">
					<input type="submit" value="Login">
				</div>
			</form>
		</div>
	</div>	
	<div class="footer">
		<p>&copy; 2019 Đại Học Duy Tân<a href=http://kcntt.duytan.edu.vn></a></p>
	</div>
</body>
</html>