
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
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>繳費</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>停車場地圖</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>聯絡我們</span></a></li>
        </ul>
      </nav>
    </div>
  </header>

<?php
		$type=isset($_POST["gtype"])?$_POST["gtype"]:"";
		$license=isset($_POST["glicense"])?$_POST["glicense"]:""; 
		
		$link = new PDO('mysql:host='.$hostname.';dbname='.$database.';charset=utf8', $username, $password);

		$count = $link->prepare("select * from temporary where `NB`='$license'");   
		$count->execute();   
		$nums=$count->rowCount(); 

		
	//	if($type=="temporary"){
		if($nums>0){
			//更新出場時間(以進入網頁時間為基準)
			$query = "UPDATE temporary SET `out_time`=now() WHERE `NB`='$license'";
            $result = $link ->query($query);
			
			//更新停車時間
			$query = "UPDATE temporary SET `time`=(select TIMESTAMPDIFF(MINUTE, `in_time`, `out_time`)) WHERE `NB`='$license'";
            $result = $link ->query($query);
			
			//叫出更新後的資料表
			$query = "select * from temporary where `NB`='$license'";
			$result = $link->query($query) ;
			
			//讀取資料
			foreach($result as $row){
				$in_time = $row["in_time"];
				$out_time = $row["out_time"];
				$position = $row["position"];
				$time = $row["time"];
				$pic = $row["picture"];
				
			//一個小時40元(超過半小時為1小時計算) 當日最高收費800($40*20hr)
			//資料庫相差時間單位為minute
				if($time<1200){
					$tmp = round($time / 60);
					$money = $tmp * 40;
					
				}else{
					$money = 800;
				}
			}
			header('Location:t_content.php?in_time='.$in_time.'&out_time='.$out_time.'&position='.$position.'&time='.$time.'&pic='.$pic.'&money='.$money);

		}else{
			echo "<script>test();</script> ";
			header('Location:C:\xampp\htdocs\license\home.php?');
			
		}


?>
<script language="jscript"> 
	function test(){ 
		alert ("Hello"); 
	} 
</script> 

</body>

</html>

