<?php
	include ("configure.php");
?>

<?php
//假如付完款後會跳來此頁面

	//接收輸入值
	$type=isset($_POST["gtype"])?$_POST["gtype"]:"";
	$license=isset($_POST["glicense"])?$_POST["glicense"]:""; 
	
	//連線資料庫
	$link = new PDO('mysql:host='.$hostname.';dbname='.$database.';charset=utf8', $username, $password);



	//臨停
	if($type=="1"){

		//出場 -> 刪除車牌資料
		$query = "DELETE temporary  WHERE `NB`='$license'";
		$result = $link ->query($query);

		header('Location:index.php?');


	//月租
	}else if($type =="2"){
		
		//延長停車效期(到期時間+30days)
		$query = "UPDATE month SET `end`=(SELECT DATE_ADD(`end`,INTERVAL 30 day) ) WHERE `NB`='BMW-0800'";
		$result = $link ->query($query);	
			
		//更新起始效期(抓付款當天日期)
		$query = "UPDATE month SET `start`=NOW()WHERE `NB`='$license'";
		$result = $link ->query($query);
		
		//更新停車效期天數(到期時間-現在時間(=起始時間))
		$query = "UPDATE month SET `day`=(select TIMESTAMPDIFF(DAY, NOW(),`end` )) WHERE `NB`='$license'";
		$result = $link ->query($query);
		
		header('Location:index.php?');

	}





?>





