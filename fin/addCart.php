<?php
session_start();
include("auntie-connect.php");
if(isset($_SESSION['recordId'])){
	$sId=$_POST['sId'];
	$num=$_POST['number'];
	date_default_timezone_set('Asia/Taipei');
	$time=date("Y-m-d h:i:s");
	$rId=$_SESSION['recordId'];

	echo $sId;
	echo $num;
	echo $rId;

	$sql='INSERT INTO `record` (`rId`, `mId`, `sId`, `rNumber`, `rTime`) VALUE("'.$rId.'", "'.$_SESSION['mId'].'", "'.$sId.'", "'.$num.'", "'.$time.'")';
	mysqli_query($con, $sql) or die ('無法新增!');

	$getdata='SELECT * FROM `record` WHERE `rId`='.$rId.'';
	if ($result=mysqli_query($con,$getdata)){
		while($row=mysqli_fetch_array($result)){
			echo $row['rId'];
			echo $row['sId'];
			echo $row['rTime'];
		}
			
	}	echo "<script>alert('已加入購物車!!')</script>";
		echo '<meta http-equiv=REFRESH CONTENT=1;url=4_1shopping.php>';
		echo '<img src="http://pic.pimg.tw/han90210h/0aa51f2245acfe9f64a1350110e05ede.gif">';
}else{
	echo "<script>alert('請先登入會員!!')</script>";
	echo '<meta http-equiv=REFRESH CONTENT=1;url=4_1shopping.php>';
}
?>