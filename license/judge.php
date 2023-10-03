
<?php
	include ("configure.php");
?>
<html>
<head>

</head>
<body>


<?php
		
	//接收輸入值
	$type=isset($_POST["gtype"])?$_POST["gtype"]:"";
	$license=isset($_POST["glicense"])?$_POST["glicense"]:""; 
	
	//連線資料庫
	$link = new PDO('mysql:host='.$hostname.';dbname='.$database.';charset=utf8', $username, $password);



	//臨停
	//ABC-5678
	if($type=="1"){
		
		//判斷資料庫中有沒有此車牌資料
		$count = $link->prepare("select * from temporary where `NB`='$license'");   
		$count->execute();   
		$nums=$count->rowCount(); 
		
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
		//沒有資料 -> 跳轉
			echo "<script>alert('查無資料!請重新輸入!');window.history.back(-1);</script>";
			
		}
		
		
	//月租
	//BMW-0800
	}else if($type =="2"){
		
		//判斷資料庫中有沒有此車牌資料
		$count = $link->prepare("select * from month where `NB`='$license'");   
		$count->execute();   
		$nums=$count->rowCount(); 
		
		if($nums>0){
			
			//更新停車效期天數(到期時間-讀取頁面時間)
			$query = "UPDATE month SET `day`=(select TIMESTAMPDIFF(DAY, NOW(),`end` )) WHERE `NB`='$license'";
            $result = $link ->query($query);
			
			//顯示資料
			$query = "select * from month where `NB`='$license'";
			$result = $link->query($query) ;
			
			//讀取資料
			foreach($result as $row){
				$start = $row["start"];
				$end = $row["end"];
				$position = $row["position"];
				$day = $row["day"];
				$pic = $row["picture"];
				
			}
			header('Location:m_content.php?start='.$start.'&end='.$end.'&position='.$position.'&day='.$day.'&pic='.$pic);

		}else{
		//沒有資料 -> 跳轉
			echo "<script>alert('查無資料!請重新輸入!');window.history.back(-1);</script>";
			
		}
		
	}

?>

</body>

</html>

