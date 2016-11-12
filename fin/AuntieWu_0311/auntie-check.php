<?php session_start();?>
<!DOCTYPE html>

<html>

<body>

<?php

	

	

	include("auntie-connect.php");

	

	$loginName=$_POST['mEmail'];

	$loginPassword=md5($_POST['mPassword']);

	

	$sql="SELECT * FROM `member` WHERE `mEmail`='".$loginName."' AND `mPassword`='".$loginPassword."'";

	if($loginName != null && $loginPassword != null){

		$result=mysqli_query($con, $sql); 

		while($row=mysqli_fetch_row($result)){

			if($row[1] == $loginName && $row[2] == $loginPassword){

				$mEmail=$row[1];

				echo $mEmail;

				//將帳號寫入session，方便驗證使用者身份

				$_SESSION['mId']=$row[0];

				$_SESSION['username']=$row[3];

				date_default_timezone_set('Asia/Taipei');

				$_SESSION['recordId']=date("Ymd_his")."_".$_SESSION['mId'];

				//echo '2'.$_SESSION['username'];

				echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';

				//echo '<a href="auntie-logout.php">登出</a>';

				echo "登入中.....";

				exit;

			}

		}

		echo '查無帳號或密碼錯誤!';

		echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';

		//echo '4'.$_SESSION['username'];

	}

			else{

		echo '不可為空格!!';

		//echo '3'.$_SESSION['username'];

		echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';

		

	}

	

	//echo $_SESSION['username'];

	?>





</body>

</html>