<?php
session_start();
if (isset($_SESSION['update'])) {
  echo '<script>alert("Lưu thông tin thành công")</script>';
  $_SESSION['update'] = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Website tìm kiếm Homestay</title>
	<link rel="stylesheet" type="text/css" href="../css/footer.css" />
	<link rel="stylesheet" type="text/css" href="../css/ThongTinCaNhanCSS/styles.css" />
	<link href="../css/ThongTinCaNhanCSS/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/ThongTinCaNhanCSS/owl.carousel.css" rel="stylesheet">
	<link href="../css/ThongTinCaNhanCSS/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/ThongTinCaNhanCSS/style1.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/ThongTinCaNhanCSS/poposlides.css" type="text/css" media="all" />
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

	<form class="form"name="frmLogin" id="frmLogin" action="/controller/capnhatthongtin.php" method=post >
	<div class="header">
		<h2>Thông tin cá nhân</h2>	
		
		<p>
			<label>Họ và tên (*):</label>
			<input name="fullname" value="<?php echo $_SESSION['ten']; ?>" type="text" placeholder="Nhập họ và tên" />
		</p>
		<p>
			<label>Số điện thoại:</label>
			<input name="phone" value="<?php echo $_SESSION['sdt']; ?>" type="text" placeholder="Nhập số điện thoại" />
		</p>
		<p>
			<label>Email (*):</label>
			<input name="email" value="<?php echo $_SESSION['email']; ?>" type="text" placeholder="Vui lòng nhập Email" disabled />
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
		"fullname": {
					required: true,
					
				},
		
		"phone" :{
			required :true,
			number :true,
			minlength:10,
		},
		"email"  :{
		
		required :true,
		email:true,
		},
		
		"address":{
		required:true,
		},
		"moreinfo":{
		required:true,
		},
		
	  },
	messages:{
		
		"fullname": {
				required: "Vui lòng nhập Họ và Tên",
			},
		"gioitinh":{
			required :" Vui lòng chọn Nam hoặc Nữ",
		},
		"phone" :{
			required :" Vui lòng nhập số điện thoại",
			number :"Chỉ được nhập  băng số",
			minlength:"Tối thiểu là 10 số",
		},
		"email":{
			required :" Vui lòng nhập Email",
			email:"Định dạng Email sai xin nhập lai",
		},
		
		"address":{
		required:" Vui lòng nhập địa chỉ",
		},
		
	},
	 });	
   });
</script>
</html>