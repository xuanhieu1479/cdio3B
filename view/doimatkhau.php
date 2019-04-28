<?php
session_start();
if (isset($_SESSION['update'])) {
  echo '<script>alert("Đổi mật khẩu thành công")</script>';
  $_SESSION['update'] = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Website tìm kiếm Homestay</title>
	<link rel="stylesheet" type="text/css" href="../css/ThongTinCaNhanCSS/styles.css" />
	<link rel="stylesheet" type="text/css" href="../css/footer.css" />
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-css -->
	<link href="../css/owl.carousel.css" rel="stylesheet"><!-- Owl-carousel-CSS -->
	<link href="../css/popup-box.css" rel="stylesheet" type="text/css" media="all" /><!-- pop-up css --> 
	<link href="../css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/poposlides.css" type="text/css" media="all" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script type="text/javascript" src="../js/ThongTinCaNhanJS/jquery-3.3.1.min.js">
	</script>
	<script type="text/javascript" src="../js/ThongTinCaNhanJS/jquery.validate.min.js">
	</script>
	
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<div class="demo-inner-content" id="home">
	<div class="main_agileits">
	<?php include "header.php" ?>
	<form class="form" name="frmLogin" id="frmLogin" action="/controller/doimatkhau.php" method=post>
	<div class="header">
		<h2>Đổi mật khẩu</h2>
		<div style="text-align: center; margin-bottom: 20px; color: red" <?php if(!isset($_SESSION['error'])) echo ' hidden'; ?>>
			<?php
			echo $_SESSION['error'];
			$_SESSION['error'] = null;
			?>
		</div>
		<p>
			<label>Nhập mật khẩu hiện tại(*)</label>
			<input id="currentPassword" value="" name="currentPassword" type="password" placeholder="Nhập mật khẫu hiện tại" />
		</p>
		<p>
			<label>Nhập mật khẩu mới (*)</label>
			<input id="newPassword" value="" name="newPassword" type="password" placeholder="Nhập mật khẩu mới" />
		</p>
		<p>
			<label>Xác nhận mật khẩu (*)</label>
			<input name="repassword" id="repassword" value="" type="password" placeholder="Xác nhận mật khẩu" />	
		</p>
		<p>
			<input type="submit" name="submit" value="Lưu thông tin" />
		</p>
		</div>
	</form>	
	<?php include "footer.html" ?>
</body>
<script type="text/javascript">
   $(document).ready(function (){
	$('#frmLogin').validate({
	  rules : {
		"currentPassword": {
			required: true,
		},
		"newPassword": {
			required: true,
		},
		"repassword" :{
			required: true,
			equalTo: "#newPassword",
		},
	  },
	messages:{
		"currentPassword": {
			required: "Vui lòng nhập Password",
		},
		"newPassword": {
			required: "Vui lòng nhập Password",
		},
		"repassword" :{
			required: "Vui lòng nhập lại Password",
			equalTo: "Nhập sai password",
		},
	},
	 });	
   });
</script>

</html>