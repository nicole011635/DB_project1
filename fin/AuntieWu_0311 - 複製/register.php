<!DOCTYPE html>
<html>
<head>
<!--	<meta http-equiv="refresh" content="0 ; url=8_2registerOK.php"> -->
</head>
<body>
<?php session_start();?>
<?php
	include("auntie-connect.php");
	$mEmail=$_POST["mEmail"];
	$mPassword=md5($_POST["mPassword"]);
	$mPassword2=md5($_POST["mPassword2"]);
	$mName=$_POST["mName"];
	$mGender=$_POST["mGender"];
	$mBirth=$_POST["mBirth"];
	$mPhone=$_POST["mPhone"];
	$mAddress=$_POST["mAddress"];

	//if()檢查不為空白&&帳號還不存在
	$exist='SELECT `mEmail` FROM `member`';
	if($result=mysqli_query($con, $exist)){
		
		while($row=mysqli_fetch_array($result)){
			
			
			
			if($row['mEmail']==$mEmail){
				echo "<script>alert('帳戶已存在!!');</script>";
				
				$url = "8_1memberRegister.php";
				echo "<script type='text/javascript'>";
				echo "window.location.href='$url'";
				echo "</script>";
				exit;
			}		
		}
		mysqli_free_result($result);
	}
	if($mPassword==$mPassword2){
	$sql='INSERT INTO `member`(`mEmail`,`mPassword`,`mName`,`mGender`, `mBirth`, `mPhone`, `mAddress`) 
	VALUES("'.$mEmail.'","'.$mPassword.'", "'.$mName.'", "'.$mGender.'", "'.$mBirth.'","'.$mPhone.'","'.$mAddress.'")';mysqli_query($con, $sql) or die ('無法新增!'.mysqli_error());
	
				$url = "8_2registerOK.php";
				echo "<script type='text/javascript'>";
				echo "window.location.href='$url'";
				echo "</script>";
				exit;
	
	}
	else{
		echo "<script>alert('密碼不相同!!');</script>";
	
	
	$url = "8_1memberRegister.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
	}
?>


</body>
</html>
 