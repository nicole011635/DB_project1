<?php session_start();?>
<!DOCTYPE html>

<html lang="zh-Hant">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>創皂生活工坊 Auntie Wu soap Workshop</title>



    <meta name="description" content="Source code generated using layoutit.com">

    <meta name="author" content="LayoutIt!">



    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet" type="text/css">

    

    <style type="text/css">

    	.div1{

    		position: relative;

    		margin-left: 250px;

    		border-color: #CFCFCF;

    		font-style: verdana;

    		width: 600px;

    	}

    	.div1 span{

    		font-weight: 400;

    		margin-left: 20px;

    	}

    	.textbox{

    		height: 30px;

    		margin-left: 20px;

    	}

    	.radiobox{

    		margin-left: 20px;

    	}

    	.label1{

    		margin-bottom: 20px;

    		font-weight: 600;

    	}

    	.label1 input{

    		font-weight: 400;

    	}

    	.table1{

    		font-size:0.4cm;

    		vertical-align: middle;

    		position: relative;

    		width: 90%;

    		margin: 0px auto;

    	}

    </style>

  </head>

  <body>



    <div class="container-fluid">

	<div class="row">

		<div class="col-md-12">

			<nav class="navbar navbar-default" role="navigation">

				<div class="navbar-header">

					<a href="index.php">

						<img alt="肥皂LOGO" src="pic/LOGO.png"  width="180px"> 

					</a>

				</div>

				

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav">

								<li>

									<a href="2_news.php"><font><font>最新消息</font></font></a>

								</li>

								<li >

									<a href="3_aboutUs.php"><font><font>關於我們</font></font></a>

								</li>

								<li class="dropdown">

									 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font><font>線上購物</font></font><strong class="caret"></strong></a>

									<ul class="dropdown-menu">

										<li>

											<a href="4_1shopping.php"><font><font>洗顏沐浴皂</font></font></a>

										</li>

										<li>

											<a href="4_1shopping.php"><font><font>洗髮皂</font></font></a>

										</li>

										<li>

											<a href="4_1shopping.php"><font><font>沐浴乳液體皂</font></font></a>

										</li>

										<li>

											<a href="4_1shopping.php"><font><font>洗髮精液體皂</font></font></a>

										</li>

										<li>

											<a href="4_1shopping.php"><font><font>美白保養系列</font></font></a>

										</li>

										<li>

											<a href="4_1shopping.php"><font><font>寵愛寵物皂</font></font></a>

										</li>

										<li>

											<a href="4_1shopping.php"><font><font>代製母乳皂</font></font></a>

										</li>

										<li>

											<a href="4_1shopping.php"><font><font>個人膚質客製手工皂</font></font></a>

										</li>			

									</ul>

								</li>

								<li>

									<a href="5_commonQuestion.php"><font><font>常見問答</font></font></a>

								</li>

								<li>

									<a href="6_contactUs.php"><font><font>聯絡我們</font></font></a>

								</li>

								<li>

									<a href="7_download.php"><font><font>表單下載</font></font></a>

								</li>

							</ul>

				</div>

			</nav>



		</div>

	</div>













	<div class="row">

		<div class="col-md-4" >

		</div>

		<div class="col-md-4" style="height:100px">

			<ul class="nav nav-pills" >

				<li>

					 <a href="9_1shoppingCart.php">填寫訂購資料</a>

				</li>

				<li class="active">

					 <a href="#">確認訂單資料</a>

				</li>

				<li>

					 <a href="#">完成訂購</a>

				</li>

			</ul>

		</div>

		<div class="col-md-4" >

		</div>

	</div>

<?php

include("auntie-connect.php");

$orderName=$_POST['orderName'];

$orderGender=$_POST['orderGender'];

$orderPhone=$_POST['orderPhone'];

$deliverWay=$_POST['deliverWay'];

$deliverSpot="009002";



if($_POST['deliverWay']){

	switch($_POST['deliverWay']){

		case "超商取貨付款 - 7-11":

		$deliverCost=65;

		break;

		

		case "超商取貨付款 - 全家":

		$deliverCost=65;

		break;

		

		case "郵局送達":

		$deliverCost=80;

		break;

		

		case "宅配貨運":

		$deliverCost=100;

		break;

		

		case "到店自取":

		$deliverCost=0;

		break;

	}

}



?>



	<form>

	<div class="row">

		<div class="panel panel-default">

			<div class="panel-body">

				<ul><li><h5><b>確認訂單</b></h5></li></ul>

				<div class="div1">

					<label class="label1">訂單編號

						<span id="recordId"><?php echo $_SESSION['recordId'];?></span>

					</label><br>

					<label class="label1">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名

						<span id="orderName"><?php echo $orderName;?></span>

						<span id="orderGender"><?php echo $orderGender;?></span>

					</label>

					<br>

					<label class="label1">手機號碼

						<span id="orderPhone"><?php echo $orderPhone;?></span>

					</label><br>

					<label class="label1">取貨方式

						<span id="deliverWay"><?php echo $deliverWay;?></span>

						<span id="deliverSpot"><?php echo $deliverSpot;?></span>

					</label><br>

					<hr>

				</div>



				<table class="table table1" style="" >

					<thead >

						<tr>

							<th>

								NO.

							</th>

							<th>

								商品名稱

							</th>

							<th>

								單價

							</th>

							<th>

								數量

							</th>

							<th>

								小計

							</th>

						</tr>

					</thead>

<?php

$getdata='SELECT * FROM `record` JOIN `soap` ON `record`.`sId`=`soap`.`sId` WHERE `record`.`rId`="'.$_SESSION["recordId"].'"';	

$smallCount=array();

if($result=mysqli_query($con, $getdata)){

	$i=1;

	while($row=mysqli_fetch_array($result)){

?>

					<tbody valign="middle">

						<tr class="<?php 

						if($i){

							switch($i%4){

								case 1:

								?>active<?php

								break;

								

								case 2:

								?>success<?php

								break;

								

								case 3:

								?>warning<?php

								break;

								

								case 0:

								?>danger<?php

								break;

							}

						}		

						?>">

							<td>

								<?php echo $i;?>

							</td>

							<td>

								<img alt="Product Image" src="<?php echo 'pic/'.$row['sPic'];?>" class="img-thumbnail" width="150px" >

								<font ><?php echo $row['sName']?></font>

							</td>

							<td>

								NT$ <?php echo $row['sCharge'];?>

							</td>

							<td>

								<span><?php echo $row['rNumber'];?></span>

							</td>

							<td>

								NT$ <?php $sC=$row['sCharge']*$row['rNumber']; 

								echo $sC;

								array_push($smallCount, $sC);?>

							</td>

						</tr>

<?php

	$i++;

	}

}

?>

					</tbody>

					<tfoot>

						<tr>

							<td></td>

							<td></td>

							<td></td>

							<td align="right">共<b> <?php echo $i-1;?> </b>件商品 商品金額

								<br>運費小計</td>

   							<td align="right"> NT$<b> <?php echo array_sum($smallCount);?></b>

   								<br> NT$<b><?php echo $deliverCost;?>  </b></td>

 						</tr>

 						<tr style="font-size:large; color:#C14948;">

							<td></td>

							<td></td>

							<td></td>

							<td align="right">總計</td>

   							<td align="right"> NT$<b> <?php echo array_sum($smallCount)+$deliverCost;

							$total=array_sum($smallCount)+$deliverCost;?> </b></td>

 						</tr>

					</tfoot>				

				</table>			

			</div>

		</div>

	</div>

	



	<div class="row">

		<div class="col-md-12" style="text-align:center;height:200px">

			<a href="9_1shoppingCart.php">

				<input type="button" value=" < 重填訂購資料" class="btn btn-primary">

			</a>

			<a href="9_3finishOrder.php">

				<input type="button" value=" 完成訂購 > " class="btn btn-primary">

			</a>			

		</div>

	</div>

	</form>





<?php

$sql='INSERT INTO `deliver` (`rId`, `dName`, `dPhone`, `dWay`, `dTotal`) VALUE

("'.$_SESSION['recordId'].'", "'.$orderName.' '.$orderGender.'", "'.$orderPhone.'", "'.$deliverWay.' '.$deliverSpot.'", "'.$total.'")';

mysqli_query($con, $sql) or die ('無法新增!');



?>





	<div class="row">

		<br><br>

		<div class="col-md-12">

			<div class="row">

				<div class="col-md-2"></div>

				<div class="col-md-6">

					敬告-創皂生活工坊未授權任何拍賣網銷售本公司產品版權所有<br>

					創皂生活工坊股份有限公司 <br>

					創皂生活工坊網站支援 Internet Explorer 7.0 以上版本 , 最佳瀏覽解析度 1024*768<br>

				</div>

				<div class="col-md-4" >

					 

					<address>

						 <strong><font><font>Auntie Wu 創皂生活工坊</font></font></strong><br><font><font> 407台中市西屯區 </font></font><font><font>上明三街11號 </font></font><br>

						 <abbr title="電話"><font><font>TEL</font></font></abbr><font><font>：（123）456-7890</font></font><br> <abbr title="信箱">E-mail</abbr><font><font>：wwwww@gmail.com</font></font>

					</address>

				</div>

			</div>

		</div>

	</div>

</div>



    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/scripts.js"></script>

  </body>

</html>