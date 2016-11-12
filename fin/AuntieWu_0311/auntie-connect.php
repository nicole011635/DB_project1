<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content=text/html;>
</head>
<body>


<?php
/* NEW 
IP: 
NAME: 
*/
/* OLD 
IP: 203.69.42.198
NAME: DB20678
*/

//建立連線
	$con=mysqli_connect("localhost","root","","auntiewusoap"); 
//設定字元編碼
		mysqli_query($con,"SET NAMES 'utf8' ");
//連線校對
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: ". mysqli_connect_error();
		}
//查詢
	
/*	$sql= "SELECT * FROM `soap` ";

	if ($result=mysqli_query($con,$sql)){
//處理查詢結果
		while ($row=mysqli_fetch_row($result)){
			echo $row[0]."  ";
		    echo $row[1]."  ";
			header("Content-Type:  image/jpeg");
			echo base64_decode($row[2]);
			echo "<br/>";
		}
		header("Content-Type:  image/jpeg");
//釋放資源
  mysqli_free_result($result);
}
*/

?>
</body>
</html>
