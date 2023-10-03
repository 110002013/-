<?php
	include ("configure.php");
?>
<?php

//接收表單值
$name=isset($_POST["name"])?$_POST["name"]:"";
$email=isset($_POST["email"])?$_POST["email"]:""; 
$suggest=isset($_POST["suggest"])?$_POST["suggest"]:""; 

//連線資料庫		
$link = new PDO('mysql:host='.$hostname.';dbname='.$database.';charset=utf8', $username, $password);

$query = "INSERT INTO contact (`name`, `email`, `suggest`)VALUES ('$name', '$email', '$suggest')";
$result = $link ->query($query);

echo "<script>alert('傳送成功!感謝您的建議!');self.location='contact.php';</script>";

?>