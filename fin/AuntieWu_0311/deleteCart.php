<?php
session_start();
include("auntie-connect.php");	
?>

<?php
$rid=$_POST['rid'];
$deletedata='DELETE FROM `record` WHERE `rIdd`="'.$rid.'"';	
mysqli_query($con, $deletedata) or die ('無法刪除!');
echo '刪除中...';
echo '<meta http-equiv=REFRESH CONTENT=1;url=9_1shoppingCart.php>';
?>




