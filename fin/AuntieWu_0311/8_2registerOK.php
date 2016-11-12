<?php session_start();?>
<!DOCTYPE html>

<html lang="zh-Hant">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="refresh" content="10 ; url=index.php">



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

							</ul

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

				<div id="logout"  style="display:none;">

					<div class="panel-body" style="display:;"><font><font>

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

					</font></font></div>

				</div>



				<!--若已登入會員-->

				<div id="login" style="display:;">

					<div class="panel-body" style="text-align:center;"><font><font>

						<p>歡迎光臨<br>

							帳號!

						</p>

						<a href="9_1shoppingCart.php">

							<button type="button" class="btn btn-default"><font><font>

								<img src="shoppingCart.png" width="30px">

								購物車

							</font></font></button>

						</a>

					</font></font></div>

					<div class="panel-footer"><font><font>

						<a href="">登出</a>

					</font></font></div>

				</div>

			</div>



			<div class="list-group">

			<form action="4_2productInfor.php" method="post">

				 <a href="#" class="list-group-item active"><font><font>產品分類</font></font></a>

				<div class="list-group-item"><font><font>

					<a href="4_1shopping.php" class="a1">洗顏沐浴皂</a>

				</font></font></div>

				<div class="list-group-item" style="padding-left:5px;">

					<h6 class="list-group-item-heading"><font><font>

					<input type="submit" name="name" value="蜂蜜牛奶手工皂" class="sList">

					<input type="submit" name="name" value="薰衣草洗顏沐浴皂" class="sList">

					<input type="submit" name="name" value="抗敏舒緩保濕修護皂" class="sList">

					<input type="submit" name="name" value="保濕滋潤牛乳皂" class="sList">

					<input type="submit" name="name" value="清新柑橘皂" class="sList">

					</font></font></h6>

				</div>

				<div class="list-group-item"><font><font>

					<a href="4_1shopping.php" class="a1">洗髮皂</a>

				</font></font></div>

				<div class="list-group-item">

					<h6 class="list-group-item-heading"><font><font>

						<input type="submit" name="name" value="榛果花茶洗髮皂" class="sList">

						<input type="submit" name="name" value="馥玉咖啡皂" class="sList">					

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

			<div class="page-header">

				<h1>

					會員註冊 <small>member register</small>

				</h1>

			</div>

			<div class="row">

				<div class="col-md-12" style="z-index: -4;margin-top:0px;" >

					<img src="https://unsplash.it/900/400/?random" style="opacity:0.3; top:50px;position:absolute;">

				</div>

				<div class="col-md-6" style="position:relative;left: 25%;margin-top: 15%;text-align:center;">

					<h2>恭喜註冊成功</h2>

					<h5> 10秒後自動跳轉回首頁 </h5><br>

					<a href="index.php"><button type="button" class="btn btn-success">

						按我回首頁

					</button></a>

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