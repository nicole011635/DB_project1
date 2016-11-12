<?php session_start();?>
<!DOCTYPE html>

<html lang="zh-Hant">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>創皂生活工坊 Auntie Wu Soap Workshop</title>



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

				<li>

					 <a href="9_2placingOrder.php">確認訂單資料</a>

				</li>

				<li class="active">

					 <a href="#">完成訂購</a>

				</li>

			</ul>

		</div>

		<div class="col-md-4" >

		</div>

	</div>



	<form>

	<div class="row">

		<div class="panel panel-default">

			<div class="panel-body"  style="height:80%;text-align:center;">

				<div class="col-md-12" style="margin-top:0px;" >

					<img src="https://unsplash.it/900/400/?random" style="opacity:0.3; ">

				</div>

				<div class="col-md-6" style="z-index: 3;position:absolute;left: 25%;margin-top: 5%;">

					<h2>訂購成功!<br>♡（*'∀`*）人（*'∀`*）♡</h2>

					<br><br>

					<a href="index.php">

						<input type="button" value="回首頁" class="btn btn-success">

					</a>

				</div>

			</div>

		</div>

	</div>

	<?php

	unset($_SESSION['recordId']);

	$_SESSION['recordId']=date("Ymd_his")."_".$_SESSION['mId'];	

	?>

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