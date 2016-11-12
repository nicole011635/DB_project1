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

				<li class="active">

					 <a href="#">填寫訂購資料</a>

				</li>

				<li>

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







	<div class="row">	

		<div class="panel panel-default">			

			<div class="panel-body">

				<table class="table table1" style="font-size:medium;" >

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

							<th>

							

							</th>

						</tr>

					</thead>

	

					<tbody valign="middle">

<?php

include("auntie-connect.php");	

$smallCount=array();

$getdata='SELECT * FROM `record` JOIN `soap` ON `record`.`sId`=`soap`.`sId` WHERE `record`.`rId`="'.$_SESSION["recordId"].'"';		

if($result=mysqli_query($con, $getdata)){

	$i=1;

	while($row=mysqli_fetch_array($result)){

		?> 

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

								<img alt="Product Image" src="<?php echo "pic/".$row['sPic'];?>" class="img-thumbnail" width="150px" >

								<font ><?php echo $row['sName']?></font>

							</td>

							<td>

								<?php echo $row['sCharge'];?>

							</td>

							<td>

						

						

								<form action="9_1shoppingCart.php" method="post">

									<input type="text" name="number" value="<?php echo $row['rNumber'];?>" size="1px">

									<input type="hidden" name="rid" value="<?php echo $row['rIdd'];?>">

									<input type="submit" value="修改" name="submit">

								</form>



							</td>

					

							<td>	

								<?php $sC=$row['sCharge']*$row['rNumber']; 

								echo $sC;

								array_push($smallCount, $sC);?>

								

							</td>

							<td>

							<form action="deleteCart.php" method="post">

								<input type="submit" class="btn btn-xs btn-default" value="刪除" name="delete">

								<input type="hidden" name="rid" value="<?php echo $row['rIdd'];?>">

							</form>

							</td>

					</tr>

				<?php

	$i++;

	}

}

?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$num=$_POST["number"];

$rid=$_POST["rid"];

echo $_POST["rid"]."...";

echo $_SESSION['recordId'];

$update='UPDATE `record` SET `rNumber`='.$num.' WHERE `rIdd`="'.$rid.'" ';

mysqli_query($con, $update)or die ("無法修改".mysqli_error($con));

echo '<meta http-equiv=REFRESH CONTENT=1;url=9_1shoppingCart.php>';

}

?>

					</tbody>			



					<tfoot>

						<tr>

							<td></td>

							<td></td>

							<td></td>

							<td align="right">共<b> <?php echo $i-1;?> </b>件商品 商品金額

   							<td align="right"> NT$<b> <?php echo array_sum($smallCount);?></b></td>

							<input type="hidden" name="total" value="<?php echo array_sum($smallCount);?>">

 						</tr>

 						

					</tfoot>

				</table>



					

			</div>

		</div>

	</div>



<form action="9_2placingOrder.php" method="post">

	<div class="row">

		<div class="panel panel-default">

			<div class="panel-body">

				<ul><li><h5><b>訂購人資料</b></h5></li></ul>

				<div class="div1">

					<label class="label1">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名

						<input type="text" class="textbox" name="orderName" required>

					</label>

					<label class="radiobox label1">

						<input type="radio" name="orderGender" value="先生">先生

					</label>

					<label class="radiobox label1">

						<input type="radio" name="orderGender" value="小姐">小姐

					</label><br>

					<label class="label1">手機號碼

						<input type="text" class="textbox" name="orderPhone" required>

					</label><br>

					<hr>

				</div>			



				<ul><li><h5><b>請選擇取貨付款方式</b></h5></li></ul>

		<div class="col-md-2"></div>

		<div class="col-md-9">

			<table class="table" >

				<tr>

					<td width="200" style="text-align:center;">

						超商取貨付款 - 7-11

					</td>

					<td width="50" class="active" style="text-align:center;">

						<input type="radio" name="deliverWay" value="超商取貨付款 - 7-11" id="sevenDeliver">

					</td>

					<td>7-11取貨付款，將酌收 65 元物流費。

						<br><br>

						<label class="label1">取貨門市

						<input type="text" class="textbox" name="deliverSpot" placeholder="請輸入收件地址">

						<a href="http://emap.pcsc.com.tw/emap.aspx" class="btn btn-link" type="button" target="_blank" >

							選擇7-11門市

						</a>

						</label>

					</td>

					

				</tr>

				<tr>

					<td width="200" line-height="60px" style="text-align:center;">

						超商取貨付款 - 全家

					</td>

					<td width="50" class="active" style="text-align:center;">

						<input type="radio" name="deliverWay" value="超商取貨付款 - 全家" id="familyDeliver">

					</td>

					<td>全家取貨付款，將酌收 65 元物流費。

						<br><br>

						<label class="label1">取貨門市

						<input type="text" class="textbox" name="deliverSpot" placeholder="請輸入收件地址">

						<a href="http://www.family.com.tw/marketing/inquiry.aspx" class="btn btn-link" type="button" target="_blank" >選擇FamilyMart門市</a>

						</label>

					</td>

				</tr>

				<tr>

					<td width="200" style="text-align:center;">

						郵局送達

					</td>

					<td width="50" class="active" style="text-align:center;">

						<input type="radio" name="deliverWay" value="郵局送達" id="postOfficeDeliver">

					</td>

					<td>郵局取貨付款，將酌收 80 元物流費。

						<br><br>

						<label class="label1">郵局局址

							<input type="text" class="textbox" name="deliverSpot" placeholder="請輸入收件地址">

							<a href="http://www.post.gov.tw/post/internet/I_location/default.jsp?style2=4" class="btn btn-link" type="button" target="_blank" >選擇郵局</a>

						</label>

					</td>

				</tr>

				<tr>

					<td width="200" style="text-align:center;">

						宅配貨運

					</td>

					<td width="50" class="active" style="text-align:center;">

						<input type="radio" name="deliverWay" value="宅配貨運" id="CODDeliver">

					</td>

					<td>宅配貨到付款，將酌收 100 元物流費。

						<br><br>

						<label class="label1">收件地址

							<input type="text" class="textbox" name="deliverSpot" placeholder="請輸入收件地址">

						</label>

					</td>

				</tr>

				<tr>

					<td width="200" style="text-align:center;">

						到店自取

					</td>

					<td width="50" class="active" style="text-align:center;">

						<input type="radio" name="deliverWay" value="到店自取" id="bySelf">

					</td>

					<td>免運費。

						<br><br>

						<label class="label1">店址：</label>

					</td>

				</tr>

			</table>

		</div>

	</div>







	<div class="row">

		<div class="col-md-12" style="text-align:center;height:200px">

			<a href="4_1shopping.php">

				<input type="button" value=" < 繼續購物" class="btn btn-primary">

			</a>

			<a href="9_2placingOrder.php">

				<input type="submit" value=" 確認訂單 > " class="btn btn-primary">

			</a>			

		</div>

	</div>

	</form>











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