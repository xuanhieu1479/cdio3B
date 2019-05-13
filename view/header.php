<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-css -->
<link href="../css/owl.carousel.css" rel="stylesheet"><!-- Owl-carousel-CSS -->
<link href="../css/popup-box.css" rel="stylesheet" type="text/css" media="all" /><!-- pop-up css --> 
<link href="../css/TrangChuCSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../css/poposlides.css" type="text/css" media="all" />

<script src="../js/TrangChuJS/bootstrap.js"></script>
<script src="../js/TrangChuJS/scrolling-nav.js"></script>
<script src="../js/TrangChuJS/jquery.magnific-popup.js" type="text/javascript"></script>
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
<script src="../js/TrangChuJS/poposlides.js"></script>
<script>
	$(".slides").poposlides();
</script>
<script src="../js/TrangChuJS/waypoints.min.js"></script> 
<script src="../js/TrangChuJS/counterup.min.js"></script>
<script>
	jQuery(document).ready(function( $ ) {
		$('.counter').counterUp({
			delay: 10,
			time: 1000 
		});
	});
</script>
<script type="text/javascript" src="../js/TrangChuJS/jquery-2.1.4.min.js"></script>

<!-- header -->
<div class="header-w3layouts"> 
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top"> 
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Tourist</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <h1><a class="navbar-brand" href="/index.php">PERFECTSTAY</a></h1>
      </div> 
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right cl-effect-15">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
          <?php
          switch ($_SESSION['idchucvu']) {
            case 1 :
              break;
            case 2 :
              echo '<li><a class="page-scroll scroll" href="/view/danghomestay.php">Đăng Homestay</a></li>';
              echo '<li><a class="page-scroll scroll" href="/view/quanlyhomestay.php">Quản lý Homestay</a></li>';
              break;
            case 3 :
              echo '<li><a class="page-scroll scroll" href="/view/lichsu.php">Lịch sử đặt phòng</a></li>';
          }
          if (isset($_SESSION['logged_in'])) {
            echo '<li><a class="page-scroll scroll responsive-signup-signin" href="/view/thongtincanhan.php">Xin chào '
            . $_SESSION['ten']
            . '</a></li>';
            echo '<li><a class="page-scroll scroll" href="/controller/dangxuat.php">Đăng xuất</a></li>';
          }
          else {
            echo '<li><a class="page-scroll scroll responsive-signup-signin" href="/view/dangnhap.php">Đăng nhập</a></li>';
            echo '<li><a class="page-scroll scroll" href="/view/dangky.php">Đăng ký</a></li>';
          }
          ?>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>  
</div>	
<!-- //header -->