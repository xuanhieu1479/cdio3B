<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Website tìm kiếm homestay</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourist a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-css -->

<link href="css/owl.carousel.css" rel="stylesheet"><!-- Owl-carousel-CSS -->

<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" /><!-- pop-up css --> 

<link href="css/TrangChuCSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/footer.css">
<!-- banner css -->
<link rel="stylesheet" href="css/poposlides.css" type="text/css" media="all" />
<!-- //banner css -->

<!-- font-awesome-icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome-icons -->

<!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //google fonts -->

</head>
	
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
 
<!--/main-header-->
<div class="demo-inner-content" id="home">
	<div class="main_agileits">
	<!--/banner-info-->
	<?php include "view/header.php" ?>

		<!-- banner info-->
		<div class="w3-banner-head-info">
				<div class="container">
				   <div class="banner-text">
				   <span class="fa fa-home" aria-hidden="true"></span>
						<h2 class="editContent">PERFECT HOMESTAY FOR YOU</h2>
						<p>Tìm kiếm và đặt Homestay mà bạn mong muốn</p>
						<div class="book-form">
						   <form action="/view/timkiem.php" method="get">
								<div class="col-md-2 form-time-w3layouts editContent">
										<label class="editContent"><span class="fa fa-map-marker" aria-hidden="true"></span>Thành Phố </label>
										<input type="text" placeholder="Thành Phố Muốn Tìm">
								</div>
								<div class="col-md-2 form-date-w3-agileits editContent">
										<label class="editContent"><span class="fa fa-user" aria-hidden="true"></span> Số Người</label>
										<select class="form-control">
											<option>1 người</option>
											<option>2 người</option>
											<option>3 người</option>
											<option>4 người</option>
											<option>5 người hoặc hơn</option>
										</select>
								</div>
								<div class="col-md-2 form-date-w3-agileits editContent">
										<label class="editContent"><span class="fa fa-use" aria-hidden="true"></span> Số tiền</label>
										<select class="form-control">
											<option>500.000~1.000.000</option>
											<option>1.000.000~2.000.000</option>
											<option>2.000.000~3.000.000</option>
											<option>Từ 3.000.000 trở lên</option>
										</select>
								</div>
								<div class="col-md-2 form-left-agileits-w3layouts editContent">
										<label class="editContent"><span class="fa fa-bus" aria-hidden="true"></span> Checkin</label>
									<div class="agileits_w3layouts_main_gridl">
										<input class="date has Datepicker" id="datepicker" name="Text" type="text" value="Ngày Ở" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '01/01/2019';}" required="">
									</div>
								</div>
								<div class="col-md-2 form-left-agileits-w3layouts editContent">
										<label class="editContent"><span class="fa fa-bus" aria-hidden="true"></span> Checkout</label>
									<div class="agileits_w3layouts_main_gridl">
										<input class="date has Datepicker" id="datepicker1" name="Text" type="text" value="Ngày Đi" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '01/01/2019';}" required="">
									</div>
								</div>
								<div class="col-md-2 form-left-agileits-submit editContent">
									  <input type="submit" value="Tìm Kiếm">
								</div>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
		</div>
		<!-- //banner-info-->
		<div class="slides-box">
			<ul class="slides">
				<li style="background: url(images/TrangChuImages/s1.jpg) no-repeat;background-size:cover;"></li>
				<li style="background: url(images/TrangChuImages/s2.jpg) no-repeat;background-size:cover;"></li>
				<li style="background: url(images/TrangChuImages/s3.jpg) no-repeat;background-size:cover;"></li>
				<li style="background: url(images/TrangChuImages/s4.jpg) no-repeat;background-size:cover;"></li>
				<li style="background: url(images/TrangChuImages/s5.jpg) no-repeat;background-size:cover;"></li>
			</ul>
		</div>
		<!-- //banner  -->
		</div>
</div>
 <!--/banner-section-->
<?php include "view/footer.html" ?>
	
<!-- //popup signup form -->

<!-- js -->
<script type="text/javascript" src="js/TrangChuJS/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- Stats-Number-Scroller-Animation-JavaScript -->
<script src="js/TrangChuJS/waypoints.min.js"></script> 
<script src="js/TrangChuJS/counterup.min.js"></script>
<script>
	jQuery(document).ready(function( $ ) {
		$('.counter').counterUp({
			delay: 10,
			time: 1000 
		});
	});
</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->

<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/TrangChuJS/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->
		
<!-- for banner js file-->
<script src="js/TrangChuJS/poposlides.js"></script>
<script>
	$(".slides").poposlides();
</script>
<!-- //for banner js file-->

<!-- pop-up-box -->
		<script src="js/TrangChuJS/jquery.magnific-popup.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});														
			});
		</script>
<!--//pop-up-box -->

<!-- requried-jsfiles-for owl -->	<!-- testimonials -->
	<script src="js/TrangChuJS/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
<!-- //requried-jsfiles-for owl -->	<!-- //testimonials -->

<!-- start-smoth-scrolling -->
<!-- <script src="js/TrangChuJS/SmoothScroll.min.js"></script>

<script type="text/javascript" src="js/TrangChuJS/move-top.js"></script>
	<script type="text/javascript" src="js/TrangChuJS/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script> -->

	<!-- here stars scrolling icon -->
	<!-- <script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script> -->
<!-- //here ends scrolling icon -->

<!-- Scrolling Nav JavaScript --> 
    <script src="js/TrangChuJS/scrolling-nav.js"></script>
<!-- //fixed-scroll-nav-js --> 
		
<!-- for bootstrap working -->
	<script src="js/TrangChuJS/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>