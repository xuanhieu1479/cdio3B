<?php
session_start();
if (isset($_SESSION['update'])) {
  echo '<script>alert("Đăng Phòng thành công")</script>';
  $_SESSION['update'] = null;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Phòng</title>
	<link rel="stylesheet" type="text/css" href="../css/DangHomestayCSS/danghome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <meta charset=utf-8 />
</head>
<body>
	<div class="container">
        <form class="form-post" action="../controller/dangphong.php" method="post" enctype="multipart/form-data">
            <input value="<?php echo htmlspecialchars($_GET["id"]); ?>" name="id" hidden />
			<div class="head-form">
				<div class="left"><h3>PERFECTSTAY</h3></div>
				<div class="right">
					<div style="background-color: #130f40; padding:0 10px ">
						<a href="/index.php" style="color: #eee;">Trang chủ</a>
					</div>
				</div>
			</div>
			<div class="body-form">
				<div class="content">
					<h2 style="font-size: 45px; color: white">Đăng Phòng</h2>
					<input type="text" class="status" name="info" placeholder="Miêu tả phòng....">
                    <input type='file' name="thumbnail" id="thumbnail" onchange="readURL(this);" />
                    <img id="blah" src="https://pix10.agoda.net/hotelImages/293/293985/293985_16111711020048807697.jpg?s=1024x768" height="100" width="200" />                        
				</div>
			</div>
			<div class="bot-form">
				<div class="col" id="col">
					<h3 style="position: absolute; left: 30px; bottom: 80px;">Đăng</h3>
					<h3 style="position: absolute; left: 30px; bottom: 40px;">Phòng</h3>
				</div>
				<div class="col">
                    <input class="input" type="number" min="100000" name="price" placeholder="Giá cả">
					<input class="input" type="number" min="1" name="capacity" placeholder="Số lượng người">
				</div>
				<div class="col">	
                    <input class="input" type="number" min="1" name="quantity" placeholder="Số lượng phòng">	
                    <input class="input" type="number" min="0" name="discount" placeholder="Giảm giá">			
				</div>
				<div class="col">
					<button class="input" style=" background-color: #ffa502; margin-top: 60px;" type="submit">Đăng thông tin</button>
				</div>
            </div>
        </form>
	</div>
	
</body>
</html>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>