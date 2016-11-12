<?php session_start();?>
<!DOCTYPE html>

<html lang="zh-Hant">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>創皂生活工坊 Auntie Wu soap  Workshop</title>



    <meta name="description" content="Source code generated using layoutit.com">

    <meta name="author" content="LayoutIt!">



    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet" type="text/css">



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

										<form action="4_1shopping.php" method="post">										
								
										<li>

											<font><font><input class="sList" type="submit" name="class" value="洗顏沐浴皂"></font></font>

										</li>

										<li>

											<font><font><input class="sList" type="submit" name="class" value="洗髮皂"></font></font>

										</li>

										<li>
											<font><font><input class="sList" type="submit" name="class" value="沐浴乳液體皂"></font></font>						

										</li>

										<li>
											<font><font><input class="sList" type="submit" name="class" value="洗髮精液體皂"></font></font>

										</li>

										<li>
											<font><font><input class="sList" type="submit" name="class" value="美白保養系列"></font></font>											

										</li>

										<li>
											<font><font><input class="sList" type="submit" name="class" value="寵愛寵物皂"></font></font>
										
										</li>

										<li>
											<font><font><input class="sList" type="submit" name="class" value="代製母乳皂"></font></font>

										</li>

										<li>
											<font><font><input class="sList" type="submit" name="class" value="個人膚質客製手工皂"></font></font>

										</li>			
									
									</form>

									</ul>

								</li>

								<li class="active">

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

		<div class="col-md-2">

			<div class="panel panel-success">

				<div class="panel-heading">

					<h3 class="panel-title"><font><font>

						會員登入

					</font></font></h3>

				</div>



				<!--若尚未登入會員-->

				<div id="logout"  style="display:;">

					<?php

					if(isset($_SESSION['username'])){

						

								echo	'<!--若已登入會員-->

									<div id="login" style="display:;">

										<div class="panel-body" style="text-align:center;"><font><font>

											<p>歡迎光臨<br>

												'.$_SESSION['username'].'

											</p>

											<a href="9_1shoppingCart.php">

												<button type="button" class="btn btn-default"><font><font>

													<img src="shoppingCart.png" width="30px">

													購物車

												</font></font></button>

											</a>

										</font></font></div>

										<div class="panel-footer"><font><font>

											<a href="auntie-logout.php">登出</a>

										</font></font></div>

									</div>';				

					}else{				

							echo '<div class="panel-body"><font><font>

								<form class="form-horizontal" role="form" method="post" action="auntie-check.php">

									<div class="form-group">

										<font><b>&nbsp;&nbsp;&nbsp;&nbsp;帳號</b></font>

										<div class="col-sm-10">

											<input type="email" class="form-control" id="inputEmail3" name="mEmail">

										</div>

									</div>

									<div class="form-group">

										<font><b>&nbsp;&nbsp;&nbsp;&nbsp;密碼</b></font>

										<div class="col-sm-10">

											<input type="password" class="form-control" id="inputPassword3" name="mPassword">

										</div>

									</div>

								<div class="form-group">

									<div class="col-sm-offset-2 col-sm-10">

										<button type="submit" class="btn btn-default"><font><font>

											登入

										</font></font></button>

									</div>

								</div>

								</form>

							</font></font></div>

							<div class="panel-footer"><font><font>

								<a href="8_1memberRegister.php">註冊會員</a>

							</font></font></div>';

						}	

?>				</div>

			</div>



			<div class="list-group">

			<form action="4_2productInfor.php" method="post">

				 <a href="#" class="list-group-item active"><font><font>產品分類</font></font></a>

				<div class="list-group-item"><font><font>

					<a href="4_1shopping.php" class="a1">洗顏沐浴皂</a>

				</font></font></div>

				<div class="list-group-item" style="padding-left:5px;">

					<h6 class="list-group-item-heading"><font><font>

					<?php include("auntie-connect.php");

$sql='SELECT * FROM `soap` WHERE `sClass`= "洗顏沐浴皂"' ;

if ($result=mysqli_query($con,$sql)){

	while($row=mysqli_fetch_array($result)){

			echo 	'<input type="submit" name="name" value="'.$row["sName"].'" class="sList">';
	}
}
?>
				</div>

				<div class="list-group-item"><font><font>

					<p class="a1">洗髮皂</p>

				</font></font></div>

				<div class="list-group-item">

					<h6 class="list-group-item-heading"><font><font>
<?php
$sql='SELECT * FROM `soap` WHERE `sClass`= "洗髮皂"' ;

if ($result=mysqli_query($con,$sql)){

	while($row=mysqli_fetch_array($result)){

			echo 	'<input type="submit" name="name" value="'.$row["sName"].'" class="sList">';
	}
}	?>					
					</font></font></h6>

				</div>

				<div class="list-group-item"><font><font>

					<p class="a1">沐浴乳液體皂</p>

				</font></font></div>

				<div class="list-group-item">

					<h6 class="list-group-item-heading"><font><font>
<?php
$sql='SELECT * FROM `soap` WHERE `sClass`= "沐浴乳液體皂"' ;

if ($result=mysqli_query($con,$sql)){

	while($row=mysqli_fetch_array($result)){

			echo 	'<input type="submit" name="name" value="'.$row["sName"].'" class="sList">';
	}
}	?>	
					</font></font></h6>

				</div>

				<div class="list-group-item"><font><font>

					<p class="a1">洗髮精液體皂</p>

				</font></font></div>

				<div class="list-group-item">

					<h6 class="list-group-item-heading"><font><font>
<?php
$sql='SELECT * FROM `soap` WHERE `sClass`= "洗髮精"' ;

if ($result=mysqli_query($con,$sql)){

	while($row=mysqli_fetch_array($result)){

			echo 	'<input type="submit" name="name" value="'.$row["sName"].'" class="sList">';
	}
}	?>	
					</font></font></h6>

				</div>
				<div class="list-group-item"><font><font>

					<p class="a1">美白保養系列</p>

				</font></font></div>

				<div class="list-group-item">

					<h6 class="list-group-item-heading"><font><font>
<?php
$sql='SELECT * FROM `soap` WHERE `sClass`= "美白保養系列"' ;

if ($result=mysqli_query($con,$sql)){

	while($row=mysqli_fetch_array($result)){

			echo 	'<input type="submit" name="name" value="'.$row["sName"].'" class="sList">';
	}
}	?>	
					</font></font></h6>

				</div>

				<div class="list-group-item"><font><font>

					<p class="a1">寵愛寵物皂</p>

				</font></font></div>

				<div class="list-group-item">

					<h6 class="list-group-item-heading"><font><font>
<?php
$sql='SELECT * FROM `soap` WHERE `sClass`= "寵愛寵物皂"' ;

if ($result=mysqli_query($con,$sql)){

	while($row=mysqli_fetch_array($result)){

			echo 	'<input type="submit" name="name" value="'.$row["sName"].'" class="sList">';
	}
}	?>	
					</font></font></h6>

				</div>

				<div class="list-group-item"><font><font>

					<p class="a1">代製母乳皂</p>

				</font></font></div>

				<div class="list-group-item">

					<h6 class="list-group-item-heading"><font><font>

<?php
$sql='SELECT * FROM `soap` WHERE `sClass`= "代製母乳皂"' ;

if ($result=mysqli_query($con,$sql)){

	while($row=mysqli_fetch_array($result)){

			echo 	'<input type="submit" name="name" value="'.$row["sName"].'" class="sList">';
	}
}	?>			

					</font></font></h6>

				</div>

				<div class="list-group-item"><font><font>

					<p class="a1">個人膚質客製手工皂</p>

				</font></font></div>

				<div class="list-group-item">

					<h6 class="list-group-item-heading"><font><font>

<?php
$sql='SELECT * FROM `soap` WHERE `sClass`= "個人膚質客製手工皂"' ;

if ($result=mysqli_query($con,$sql)){

	while($row=mysqli_fetch_array($result)){

			echo 	'<input type="submit" name="name" value="'.$row["sName"].'" class="sList">';
	}
}	?>	

					</font></font></h6>

				</div>

				

		<!--		<div class="list-group-item"><font><font>

					<a href="4_1shopping.php" class="a1">沐浴乳液體皂</a>

				</font></font></div>

				<div class="list-group-item">

					<h5 class="list-group-item-heading"><font><font>

						<ul>

							<li><a href="4_2productInfor.php">沐浴乳</a></li>

							<li><a href="4_2productInfor.php">沐浴乳</a></li>

						</ul>

					</font></font></h5>

				</div>

				<div class="list-group-item"><font><font>

					<a href="4_1shopping.php" class="a1">洗髮精液體皂</a>

				</font></font></div>

				<div class="list-group-item">

					<h5 class="list-group-item-heading"><font><font>

						<ul>

							<li><a href="4_2productInfor.php">洗髮精</a></li>

							<li><a href="4_2productInfor.php">洗髮精</a></li>

						</ul>

					</font></font></h5>

				</div>

				<div class="list-group-item"><font><font>

					<a href="4_1shopping.php" class="a1">美白保養系列</a>

				</font></font></div>

				<div class="list-group-item"><font><font>

					<a href="4_1shopping.php" class="a1">寵愛寵物皂</a>

				</font></font></div>

				<div class="list-group-item"><font><font>

					<a href="4_1shopping.php" class="a1">代製母乳皂</a>

				</font></font></div>

				<div class="list-group-item"><font><font>

					<a href="4_1shopping.php" class="a1">個人膚質客製手工皂</a>

				</font></font></div>

				<a class="list-group-item active">

					<span class="badge"><font>Auntie wu</font></span>

					<font>產品分類</font>

				</a>

				-->

			</form>

			</div>

		</div>

		<div class="col-md-10">

			





			<ul class="breadcrumb">

				<li>

					<a href="index.php">首頁</a> <span class="divider"></span>

				</li>

				<li>

					<a href="#">常見問答</a> <span class="divider"></span>

				</li>

			</ul>

			<div class="page-header">

				<h2 id="top">

					常見問答 <small> Q&amp;A </small>

				</h2>

			</div>



			<div class="row">

				<div class="col-md-12">

					<table class="table" style="font-size:large;">

						<thead>

							<tr>

								<th>

									

								</th>

								<th>

									Question

								</th>

							</tr>

						</thead>

						<tbody>

							<tr>

								<td>

									1

								</td>

								<td >

									<dt>

										Q:過期的母乳可以使用嗎?

									</dt>

									<dd>

										可以的!大多數作母乳皂的媽咪都是因為母乳冰棒太多<BR>

										寶寶不喝或過期了不能喝，才拿來做母乳皂的哦!<BR>

										只要是沒有臭酸，一直冷凍著的母乳都可以入皂。

									</dd>

								</td>

								<td>

									<a href="#top" class="btn btn-xs" type="button">TOP↑</a>

								</td>

							</tr>

							<tr class="active">

								<td>

									2

								</td>

								<td>

									<dt>

										Q:母乳皂可以放多久?怎麼保存?

									</dt>

									<dd>

										母乳皂沒有添加防腐劑，通常建議期限是一年<BR>

										但沒有變色，發出油味都還可以使用<BR>

										如果媽咪家中環境較潮濕或是怕一年使用不完<BR>

										也可以把皂用保鮮盒蜜蜂，冰在冰箱裡<BR>

										低溫乾燥保存可放約兩年

									</dd>

								</td>

								<td>

									<a href="#top" class="btn btn-xs" type="button">TOP↑</a>

								</td>

							</tr>

							<tr class="success">

								<td>

									3

								</td>

								<td>

									<dt>

										Q:代製一條皂要多少母乳冰?可以切幾塊?幾克?有造型可以選嗎?

									</dt>

									<dd>

										每條母乳皂需要250ml的母乳冰，加入油脂、NaOH、經由添加物後<BR>

										造詣總重約950g，晾皂過程水分會流失約10%<BR>

										成皂後會將表面稍微修平，蓋上皂章，每條切八塊，每塊約100g~110g<BR>

										造型每條加100元(造型連模不多收費)

									</dd>

								</td>

								<td>

									<a href="#top" class="btn btn-xs" type="button">TOP↑</a>

								</td>

							</tr>

							<tr class="warning">

								<td>

									4

								</td>

								<td>

									<dt>

										Q:母乳皂不加精油，皂會不會有腥味?

									</dt>

									<dd>

										不會的，冷凍奶的腥味在加入油脂、經過皂化後就沒有味道了<BR>

										成皂後會有油脂淡淡的香味

									</dd>

								</td>

								<td>

									<a href="#top" class="btn btn-xs" type="button">TOP↑</a>

								</td>

							</tr>

							<tr class="danger">

								<td>

									5

								</td>

								<td>

									<dt>

										Q:肥皂?

									</dt>

									<dd>

										沒錯，是肥皂

									</dd>

								</td>

								<td>

									<a href="#top" class="btn btn-xs" type="button">TOP↑</a>

								</td>

							</tr>

						</tbody>

					</table>

					

				</div>

			</div>

















		</div>

	</div>

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