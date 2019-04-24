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
        <h1><a class="navbar-brand" href="index.html">PERFECTSTAY</a></h1>
      </div> 
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right cl-effect-15">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
          <li><a class="page-scroll scroll" href="#home">Homestay</a></li>
          <li><a class="page-scroll scroll" href="#packages">Yêu Thích</a></li>
          <li><a class="page-scroll scroll" href="#testimonials">Khách Hàng</a></li>
          <li><a class="page-scroll scroll" href="#contact">Liên hệ</a></li>

          <?php
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