<!DOCTYPE html>
<html>
<body>
<?php session_start(); ?>
<?php
	include("auntie-connect.php");
	session_unset();
	session_destroy();
	//echo '6已登出!'.$_SESSION['username'];
	echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>'
?>登出中.....
</body>

</html>