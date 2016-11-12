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
						
								echo	'<!--已登入會員-->
									<div id="login" style="display:;">
										<div class="panel-body" style="text-align:center;"><font><font>
											<p>歡迎光臨<br>
												'.$_SESSION['username'].'
											</p>
											<a href="9_1shoppingCart.php">
												<button type="button" class="btn btn-default"><font><font>
													<img src="/pic/shoppingCart.png" width="30px">
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
?>				
				</div>
							

	

			</div>

			<div class="list-group">
			<form action="4_2productInfor.php" method="post">
				<a href="#" class="list-group-item active"><font><font>產品分類</font></font></a>
				<div class="list-group-item"><font><font>
					<a href="4_1shopping.php" class="a1" >洗顏沐浴皂</a>
				</font></font></div>
				<div class="list-group-item iList">
					<h6 class="list-group-item-heading"><font><font>
					<input type="submit" name="name" value="蜂蜜牛奶手工皂" class="sList"><br>
					<input type="submit" name="name" value="薰衣草洗顏沐浴皂" class="sList"><br>
					<input type="submit" name="name" value="抗敏舒緩保濕修護皂" class="sList"><br>
					<input type="submit" name="name" value="保濕滋潤牛乳皂" class="sList"><br>
					<input type="submit" name="name" value="清新柑橘皂" class="sList"><br>
					</font></font></h6>
				</div>
				<div class="list-group-item"><font><font>
					<a href="4_1shopping.php" class="a1">洗髮皂</a>
				</font></font></div>
				<div class="list-group-item iList">
					<h6 class="list-group-item-heading"><font><font>
						<input type="submit" name="name" value="榛果花茶洗髮皂" class="sList"><br>
						<input type="submit" name="name" value="馥玉咖啡皂" class="sList"><br>	
					</font></font></h6>
				</div>
				<div class="list-group-item"><font><font>
					<a href="4_1shopping.php" class="a1">沐浴乳液體皂</a>
				</font></font></div>
				<div class="list-group-item iList">
					<h6 class="list-group-item-heading"><font><font>
						<input type="submit" name="name" value="沐浴乳" class="sList"><br>
						<input type="submit" name="name" value="沐浴乳" class="sList"><br>
					</font></font></h6>
				</div>
				<div class="list-group-item"><font><font>
					<a href="4_1shopping.php" class="a1">洗髮精液體皂</a>
				</font></font></div>
				<div class="list-group-item iList">
					<h6 class="list-group-item-heading"><font><font>
						<input type="submit" name="name" value="洗髮精液體皂" class="sList"><br>
						<input type="submit" name="name" value="洗髮精液體皂" class="sList"><br>
					</font></font></h6>
				</div>
				<div class="list-group-item"><font><font>
					<a href="4_1shopping.php" class="a1">美白保養系列</a>
				</font></font></div>
				<div class="list-group-item iList">
					<h6 class="list-group-item-heading"><font><font>
						<input type="submit" name="name" value="美白保養系列" class="sList"><br><br>
						<input type="submit" name="name" value="美白保養系列" class="sList"><br>
					</font></font></h6>
				</div>
				<div class="list-group-item"><font><font>
					<a href="4_1shopping.php" class="a1">寵愛寵物皂</a>
				</font></font></div>
				<div class="list-group-item iList">
					<h6 class="list-group-item-heading"><font><font>
						<input type="submit" name="name" value="寵愛寵物皂" class="sList"><br>
						<input type="submit" name="name" value="寵愛寵物皂" class="sList"><br>
					</font></font></h6>
				</div>
				<div class="list-group-item"><font><font>
					<a href="4_1shopping.php" class="a1">代製母乳皂</a>
				</font></font></div>
				<div class="list-group-item iList">
					<h6 class="list-group-item-heading"><font><font>
						<input type="submit" name="name" value="代製母乳皂" class="sList"><br>
						<input type="submit" name="name" value="代製母乳皂" class="sList"><br>
					</font></font></h6>
				</div>
				<div class="list-group-item"><font><font>
					<a href="4_1shopping.php" class="a1">個人膚質客製手工皂</a>
				</font></font></div>
				<div class="list-group-item iList">
					<h6 class="list-group-item-heading"><font><font>
						<input type="submit" name="name" value="個人膚質客製手工皂" class="sList"><br>
						<input type="submit" name="name" value="個人膚質客製手工皂" class="sList"><br>
					</font></font></h6>
				</div>
				<a class="list-group-item active">
					<span class="badge"><font>Auntie wu</font></span>
					<font>產品分類</font>
				</a>
			</form>
			</div>
			
		</div>
		<div class="col-md-10">
			
		<div class="row">
			<!--動圖-->
			<div class="carousel slide" id="carousel-119723">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-119723">
					</li>
					<li data-slide-to="1" data-target="#carousel-119723">
					</li>
					<li data-slide-to="2" data-target="#carousel-119723">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="動圖一" src="pic/01010.jpg">
						<div class="carousel-caption" style="color: black;">
							<h4>
								Auntie Wu SOAP-創皂生活工坊
							</h4>
							<p><font><font>
								~ 喜悅 平安 分享 愛 ~
							</font></font></p>
						</div>
					</div>
					<div class="item">
						<img alt="動圖二" src="https://unsplash.it/1600/650/?random">
						<div class="carousel-caption">
							<h4><font><font>
								薰衣草洗顏沐浴皂
							</font></font></h4>
							<p><font><font>
								薰衣草具舒緩肌膚的成效，散發出的自然香氣，可幫助紓解身心，緩和一整天的緊繃感，使用後清爽放鬆、保濕不乾澀，讓肌膚更加柔嫩明亮。

							</font></font></p>
						</div>
					</div>
					<div class="item">
						<img alt="動圖三" src="pic/02020.jpg">
						<div class="carousel-caption">
							<h4><font><font>
								抗敏舒緩保濕修護皂
							</font></font></h4>
							<p><font><font>
								結合多種花材製成，富含維生素等美容成份，玫瑰內含保濕因子，能被肌膚充分吸收，並保存水分，能在潔膚的基礎上再次凈化肌膚，使其更容易吸收養份。洗後滋潤、不緊繃、不乾澀，溫和不易刺激，能平衡油脂，花草淡淡的香氣，具安撫身心效果。適合暗沉、常化妝及乾性、敏感肌膚使用。
							</font></font></p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-119723" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-119723" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>

			<div class="row" style="margin-left:4%;">
				<h2>最新消息</h2>
<?php			
include("auntie-connect.php");
$sql="SELECT `nId`, `nTitle` ,`nContent`, `nPic` FROM `news` ";
	if ($result=mysqli_query($con,$sql))
	  {
	  // Return the number of rows in result set
	  $rowcount=mysqli_num_rows($result);
	  
	  mysqli_free_result($result);
	  }
for($i=1;$i<=3;$i++){
	$sql='SELECT * FROM `news` WHERE `nId`='.$rowcount.'';
	if ($result=mysqli_query($con,$sql)){

		while($row=mysqli_fetch_array($result)){
				
					echo	'<div class="col-md-12">
									<h4><font><font>'.
										$row["nTitle"]
									.'</font></font></h4>
									
									<p>
										<a id="modal-10335" href="#modal-container-10335" role="button" class="btn" data-toggle="modal">查看詳情 »</a>
									</p> 
									
									
								<div class="modal fade" id="modal-container-10335" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											 
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
												×
											</button>
											<h4 class="modal-title" id="myModalLabel">
												'.$row["nTitle"].'
											</h4>
										</div>
										<div class="modal-body">
											'.$row["nContent"].'
										</div>
										<div class="modal-body" >
											<img width="80%" src="'.$row["nPic"].'">
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">
												Close
											</button> 
										</div>
									</div>
							
								</div>						
								</div>
							</div>';
		}
	}
	$rowcount--;
}
?>
			</div>
		</div>
	</div>
	<div class="row" style="color:#FDF6F0;">
		<br><br>
		<div class="col-md-12" style="background-color:#B49B7F;">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-6"><br>
					<strong><font><font>Auntie Wu 創皂生活工坊</font></font><p>
					© 版權所有       敬告- 創皂生活工坊未授權任何拍賣網銷售本公司產品<p>
				</div>
				<div class="col-md-4" >
					<address>
						 </strong><br> 台中市西屯區 ( 秋紅谷站 ) <br>
						 <abbr title="電話"><font><font>TEL</font></font></abbr><font><font>：0978-009-890</font></font><br> <abbr title="信箱">E-mail</abbr><font><font>：jk8588soap@yahoo.com.tw</font></font>
					</address>
				</div>
			</div>
		</div>
		<div style="hieght:20px;"></div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>