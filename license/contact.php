
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

<body>

  <!-- 響應式側邊欄 -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- Header -->
  <header id="header">
    <div class="d-flex flex-column">
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>繳費</span></a></li>
          <li><a href="map.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>停車場地圖</span></a></li>
          <li><a href="contact.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>聯絡我們</span></a></li>
        </ul>
      </nav>
    </div>
  </header>
<main id="main">
   <section  class="about">
   	<div class="container">
   		<div class="section-title">
			<h2>聯絡我們</h2>
		</div>
		<form action="contact_save.php" method="POST" name="send" onsubmit="return check()">
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">簡稱</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="王小明">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">電子郵件</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">建議</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="suggest" rows="3"></textarea>
			</div>
			<div class="col-auto"><input type="submit" value="傳送">
		</form>
	</div>
	</section>
</main>
<script>
	function check(){
			if(document.send.name.value==""){
			  alert('請輸入簡稱');
			  document.send.name.focus();
			  return false;
			}
			if(document.send.email.value==""){
			  alert('請輸入電子郵件');
			  document.send.email.focus();
			  return false;
			}
			if(document.send.suggest.value==""){
			  alert('請輸入建議');
			  document.send.suggest.focus();
			  return false;
			}
		return true;
	}
			
</script>
   

  <!-- Vendor JS Files -->
  <script src="inner/assets/vendor/aos/aos.js"></script>
  <script src="inner/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="inner/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="inner/assets/js/main.js"></script>

</body>

</html>