
<!--模板參考:https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/-->
<?php
	include ("configure.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="inner/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="inner/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="inner/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="inner/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="inner/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="inner/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="inner/assets/css/style.css" rel="stylesheet">

</head>
<style>
	<!--把div改成橫向排列-->
	#div1.#div2.#div3.#div4{
		display:inline-block;
		
	}
	#wrap{
		display:flex;
		
	}
	
</style>
<body>

  <!-- 響應式側邊欄 -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- Header -->
  <header id="header">
    <div class="d-flex flex-column">
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php class="nav-link scrollto"><i class="bx bx-user"></i> <span>繳費</span></a></li>
          <li><a href="map.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>停車場地圖</span></a></li>
          <li><a href="contact.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>聯絡我們</span></a></li>
        </ul>
      </nav>
    </div>
  </header>
	<?php
	//接收judge.php中抓到的資料
		$start = isset($_GET["start"])?$_GET["start"]:"";
		$end = isset($_GET["end"])?$_GET["end"]:"";
		$position = isset($_GET["position"])?$_GET["position"]:"";
		$day = isset($_GET["day"])?$_GET["day"]:"";
		$pic = isset($_GET["pic"])?$_GET["pic"]:"";

	?>
  <main id="main">
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>繳費</h2>
        </div>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
  		  <!--圖片來源:https://www.7car.tw/articles/read/60078/second_134-->
            <img src="<?php echo $pic; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>起始日期:</strong> <span><?php echo $start;?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>到期日期:</strong> <span><?php echo $end;?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>位置:</strong> <span><?php echo $position;?></span></li>      
				 <li><i class="bi bi-chevron-right"></i> <strong>剩餘天數:</strong> <span><?php echo $day;?></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<div class="container">
	<div class="section-title">
        <h2>繳費方式</h2>
    </div>
</div>
	<div class="container" id="wrap">
		<div class="card" style="width: 16rem;" id="div1" >
			<img src="https://roo.cash/blog/wp-content/uploads/2021/11/%E8%A1%97%E5%8F%A3%E6%94%AF%E4%BB%98%E6%98%AF%E4%BB%80%E9%BA%BC%EF%BC%9F%E8%A1%97%E5%8F%A3%E6%94%AF%E4%BB%98-logo.png" height="120" class="card-img-top">
			<div class="card-body" id="div1">
				<h5 class="card-title">街口支付</h5>
				<a href="https://apps.apple.com/tw/app/%E8%A1%97%E5%8F%A3%E6%94%AF%E4%BB%98/id1020122239" class="btn btn-primary">Go</a>
			</div>
		</div>
		<div class="card" style="width: 16rem;" id="div2" >
			<img src="data:image/png;base64,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"  height="120" class="card-img-top">
			<div class="card-body" id="div1">
				<h5 class="card-title">pi 錢包</h5>
				<a href="https://apps.apple.com/tw/app/pi-%E6%8B%8D%E9%8C%A2%E5%8C%85/id975840583" class="btn btn-primary">Go</a>
			</div>
		</div>
		<div class="card" style="width: 16rem;" id="div3" >
			<img src="https://play-lh.googleusercontent.com/jHKvCj9Lo4fF4KwZlemwJA16nNol8HuzIpoe0_RCjVjVJtvqxvEWxgu0ICy88lx98d2L"  height="120" class="card-img-top">
			<div class="card-body" id="div1">
				<h5 class="card-title">Line Pay</h5>
				<a href="https://apps.apple.com/tw/app/line-pay/id1449817412" class="btn btn-primary">Go</a>
			</div>
		</div>
		<div class="card" style="width: 16rem;" id="div4" >
			<img src="https://mrtang.tw/wp-content/uploads/2019/10/1572169625-2af245b69e9bde3d76d75eeaed006c94.jpg"  height="120" class="card-img-top">
			<div class="card-body" id="div1">
				<h5 class="card-title">台灣 Pay</h5>
				<a href="https://apps.apple.com/tw/app/%E5%8F%B0%E7%81%A3%E8%A1%8C%E5%8B%95%E6%94%AF%E4%BB%98/id1375232040" class="btn btn-primary">Go</a>
			</div>
		</div>
	</div>
	<p></p>

	
</main>
   

  <!-- Vendor JS Files -->
  <script src="inner/assets/vendor/aos/aos.js"></script>
  <script src="inner/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="inner/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="inner/assets/js/main.js"></script>

</body>

</html>