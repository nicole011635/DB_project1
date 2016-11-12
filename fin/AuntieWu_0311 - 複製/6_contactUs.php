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

								<li>

									<a href="5_commonQuestion.php"><font><font>常見問答</font></font></a>

								</li>

								<li class="active">

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

					<a href="#">聯絡我們</a> <span class="divider"></span>

				</li>

			</ul>

			<div class="page-header">

				<h2>

					聯絡我們 <small>contact us</small>

				</h2>

			</div>









			<div class="row">

		<div class="col-md-12">

			

			

			<div class="row">

				<div class="col-md-7">

					<div class="jumbotron">

						<div style="text-align:center;">

							<img src="pic/LOGO.png">

							<h4>

								創皂生活工坊<br>

								Auntie Wu Soap Workshop<br><br>

							</h4>

						</div>

						<p style="font-size: medium;">

							台 北 : 台北市內湖區 ( 港墘捷運站 )<br>

							台 中 : 台中市西屯區 ( 秋紅谷站 )<br>

							高 雄 : 高雄市鼓山區 ( 西子灣站 )<br>

							電 話 : 0978-009-890<br>

							信 箱 : jk8588soap@yahoo.com.tw<br><br>

						</p>

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.126487798964!2d120.63716771444506!3d24.167296378640142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693df398e079b3%3A0x30fcea9948415f55!2z56eL57SF6LC35buj5aC0!5e0!3m2!1szh-TW!2stw!4v1448689091181" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

					</div>

				</div>

				<div class="col-md-4" style="height: 600px">

					<form role="form" action="mailto:e04850628@gmail.com" encType="text/plain" method="post" onsubmit="return validate()">

						<p>

							寄信給我們 : 

						</p> 

						<div class="form-group">

							<label for="inputName">

								姓名

							</label>

							<input type="text" class="form-control" id="contactName" required>

						</div>

						<div>

							<label >

								性別

							</label><br>

							<label>

								<input type="radio" name="gender" value="male"> 先生

							</label>

							<label>

								<input type="radio" name="gender" value="female"> 小姐

							</label>

						</div> 

						<div class="form-group">							 

							<label for="inputPhone">

								連絡電話

							</label>

							<input type="tel" class="form-control" id="contactTel" required>

						</div>

						<div class="form-group">							 

							<label>

								E-mail

							</label>

							<input type="email" class="form-control" id="contactEmail" required >

						</div>

						<div class="form-group">							 

							<label>

								想說的話：

							</label><br>

							<textarea name="contactText" class="form-control" style="height:130px" required>

							</textarea>

						</div>

						<div class="form-group">							 

							<p class="help-block">

								平均回覆時間：兩個工作天

							</p>							

							<input Type="submit" class="btn btn-primary" Value="寄信" onclick="self.location.href='mailto:e04850628@gmail.com'">

						</div>

					</form>

				</div>

			</div>









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