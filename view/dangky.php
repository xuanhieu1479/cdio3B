<?php session_start(); ?>
<!doctype html>
<html>
<head>
<title>Website tìm kiếm homestay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">

<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/DangKyCSS/style.css" rel='stylesheet' type='text/css' media="all" />

</head>
<body>
<h1 class="w3ls">Đăng ký thông tin</h1>
<div class="content-w3ls">
	<div class="content-agile1">
		<h2 class="agileits1">HomeStay</h2>
		<p class="agileits2">Nơi tận hưởng những giây phút mệt mỏi.	</p>
	</div>
	<div class="content-agile2">		
		<form action="../controller/dangky.php" method="post" id="formDemo">
			<div style="text-align: center; margin-bottom: 20px; color: red" <?php if(!isset($_SESSION['error'])) echo ' hidden'; ?>>
				<?php
				echo $_SESSION['error'];
				$_SESSION['error'] = null;
				?>
			</div>

			<div class="form-control w3layouts"> 
				<input type="text" id="firstname" name="name" placeholder="Họ Tên" title="Please enter your First Name" required="">
			</div>

			<div class="form-control w3layouts">	
				<input type="email" id="email" name="email" placeholder="Email@example.com" title="Please enter a valid email" required="">
			</div>

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="password" placeholder="Mật khẩu" id="password1" required="">
			</div>	

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="confirm-password" placeholder="Xác nhận lại mật khẩu" id="password2" required="">
			</div>	
			<div>
			<label class="anim">
				 <input type="radio" id="radioNCC" name="permission" value="3" onclick="flipRadio('radioKH');" checked="true" /><span>Khách hàng</span>
			</label>
			<label class="anim1">
				<input type="radio" id="radioKH" name="permission" value="2" onclick="flipRadio('radioNCC');"  /><span>Nhà cung cấp</span>
				
			</label >			
			</div>
			<input type="submit" class="register" value="Đăng ký"/>
			
		</form>
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');	 
					//empty string means no validation error
			}
			function flipRadio(radioID) {
				document.getElementById(radioID).checked=false;
			}
		</script>
		
		
		
	</div>
	<div class="clear"></div>
</div>
<p class="copyright w3l"> &copy; 2019 Đại Học Duy Tân<a href=http://kcntt.duytan.edu.vn/ target="_blank"></a></p>
</body>
</html>